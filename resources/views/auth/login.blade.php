<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <div>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit">Login</button>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            @endif
        </form>
    </div>
</body>
</html>
