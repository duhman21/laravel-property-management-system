<!DOCTYPE html>
<html>
<head>
    <title>Login - Easy Real Estate</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .form-container { max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 3px; }
        button { width: 100%; padding: 10px; background: #007cba; color: white; border: none; border-radius: 3px; cursor: pointer; }
        button:hover { background: #005a87; }
        .link { text-align: center; margin: 10px 0; }
        a { color: #007cba; text-decoration: none; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="link">
            <a href="{{ route('register') }}">Don't have an account? Register</a>
        </div>
        <div class="link">
            <a href="/">Back to Home</a>
        </div>
    </div>
</body>
</html>