<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('users.index', 1);
        } else {
            return view('backoffice.login');
        }
    }

    public function login(Request $request)
    {
        $admin = Admin::where('username', $request->username)
                ->where('password', $request->password)
                ->first();

        if($admin)
        {
            Auth::guard('admin')->login($admin, true);
            return redirect()->route('users.index', 1);
            
        }else{
            return redirect()->back()->with('fail', 'Credentials doesn\'t match.');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.index');
    }
}
