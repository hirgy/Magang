<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div>
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus>

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
