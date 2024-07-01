<!DOCTYPE html>
<html>
    <body>
    Estimado(a) {{ $user->name }},<br><br>

    Ingresa a la siguiente liga para restablecer tu contraseña para la promoción Qué Antojo de Reirme Maruchan:<br><br>

        <a href="{{ url('password_reset/' . $password_reset->token) }}">{{ url('password_reset/' . $password_reset->token) }}</a>

    </body>
</html>
