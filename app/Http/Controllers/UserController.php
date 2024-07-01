<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\PasswordResetCompleteRequest;
use App\Models\User;
use App\Models\Participation;
use App\Models\ParticipationDay;
use App\Models\Week;
use App\Models\Winner;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\PasswordResetMail;
use Auth;

class UserController extends Controller
{
    /**
     * Función que regresa la vista de registro
     * -------------------------------------------------------------------------------------------*/
    function faqs()
    {
        $week = Week::currentWeek();

        return view('pages.faqs', [
            'week'  => $week,
        ]);
    }
    /**
     * Función que regresa la vista de registro
     * -------------------------------------------------------------------------------------------*/
    function home()
    {
        $now = Carbon::now();
        $first_participation_day = ParticipationDay::find(1);
        $start_promo_time = Carbon::createFromFormat('Y-m-d H:i:s', $first_participation_day->date . " " .  $first_participation_day->start_time);

        if ($now->format('Y-m-d H:i:s') >= $start_promo_time->format('Y-m-d H:i:s')) {
            return view('pages.home');
        } else {
            return view('pages.preview');
        }
    }

    /**
     * Función que regresa la vista de registro
     * -------------------------------------------------------------------------------------------*/
    function ganadores()
    {
        $weeks = Week::all();

        return view('pages.ganadores', [
            'weeks' => $weeks,
        ]);
    }

    function bases()
    {
        return view('pages.bases');
    }

    /**
     * Función que regresa la vista de registro
     * -------------------------------------------------------------------------------------------*/
    function registro()
    {
        if (Auth::guard('user')->check()) {
            return redirect()->route('user.profile');
        }
        return view('pages.registro');
    }

    /**
     * Función que da de alta a un usuario
     * -------------------------------------------------------------------------------------------*/
    function sign_in(SignInRequest $request)
    {
        $user = User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'password'          => bcrypt($request->password),
        ]);

        Auth::guard('user')->login($user);

        return redirect()->route('user.thank_you_page');
    }

    /**
     * Función que regresa la vista de la thank you page
     * -------------------------------------------------------------------------------------------*/
    function thank_you_page()
    {
        return view('pages.thank_you_page');
    }

    /**
     * Función que regresa la vista de la thank you page
     * -------------------------------------------------------------------------------------------*/
    function gracias_por_participar()
    {
        return view('pages.gracias_por_participar');
    }

    /**
     * Función para eliminar la sesión del usuario
     * -------------------------------------------------------------------------------------------*/
    public function logout(Request $request)
    {
        if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return redirect()->route('user.home');
    }

    /**
     * Función que regresa la vista para que un suaurio inicie sesión
     * -------------------------------------------------------------------------------------------*/
    function login_form()
    {
        if (Auth::guard('user')->check()) {
            return redirect()->route('user.profile');
        }

        return view('pages.login');
    }

    /**
     * Función para el inicio de sesión de un usuario
     * -------------------------------------------------------------------------------------------*/
    function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)
            ->first();

        if (!$user) {
            return redirect()->back()->withErrors(['auth-validation' => 'El correo electrónico no se encuentra registrado en nuestra base de datos.']);
        }

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::guard('user')->login($user);
            return redirect()->route('user.profile');
        } else {
            return redirect()->back()->withErrors(['auth-validation' => 'El usuario o la contraseña son incorrectos']);
        }
    }


    /*
     * 
     * -------------------------------------------------------------------------------------------*/
    function olvideMiContrasenia()
    {
        return view('pages.olvide_mi_contrasenia');
        // return view('sign_in');
    }

    /*
     * 
     * -------------------------------------------------------------------------------------------*/
    public function password_reset_request(PasswordResetRequest $request)
    {
        $password_reset = PasswordReset::where('email', $request->email)
            ->where('redeemed_at', null)
            ->first();

        if (!$password_reset) {
            do {
                $token = Str::random(32);
                $password_reset_exists = PasswordReset::where('token', $token)->first();
            } while ($password_reset_exists);

            $password_reset = PasswordReset::create([
                'email'         => $request->email,
                'token'         => $token,
            ]);
        }
        $user = User::where('email', $request->email)->first();

        // Se envia el correo electronico con la la ruta
        Mail::to($request->email)->send(new PasswordResetMail($password_reset, $user));

        return redirect()->back()->withErrors(["Hemos enviado un correo electrónico con la información necesaria para que restablezcas tu contraseña."]);
    }

    /*
     * 
     * -------------------------------------------------------------------------------------------*/
    public function password_reset($token)
    {
        $password_reset = PasswordReset::where('token', $token)
            ->where('redeemed_at', null)
            ->first();

        if (!$password_reset) {
            return redirect()->route('user.home');
        }

        return view('pages.password_reset', [
            'password_reset'    => $password_reset,
        ]);
    }

    /*
     * 
     * -------------------------------------------------------------------------------------------*/
    public function password_reset_complete(PasswordResetCompleteRequest $request)
    {
        $password_reset = PasswordReset::where('token', $request->token)->where('redeemed_at', null)->first();

        if (!$password_reset) {
            return redirect()->route('user.home');
        }

        $user = User::where('email', $password_reset->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        $password_reset->redeemed_at = Carbon::now();
        $password_reset->save();

        return redirect()->route('login')->withErrors(['password' => 'Tu contraseña ha sido restablecida con éxito.']);
    }

    /*
    |------------------------------------------------------------------------------------------
    | PANEL DE ADMNISTRACION
    |------------------------------------------------------------------------------------------
    */
    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function index(Week $week)
    {
        $users = User::whereBetween('created_at', [$week->start_date, $week->end_date])->get();

        return view('backoffice.users.index', [
            'week'      => $week,
            'users'     => $users,
        ]);
    }

    /**
     *
     * -------------------------------------------------------------------------------------------*/
    public function export(Week $week)
    {
        return Excel::download(new UsersExport($week), 'usuarios_' . $week->name . '.xlsx');
    }
}
