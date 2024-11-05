<!-- login.blade.php -->
@if ($errors->has('loginError'))
    <p class="error">{{ $errors->first('loginError') }}</p>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - CLOUD SMP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <div class="login-page">
        <div class="login-container">
            <!-- Display errors if login fails -->
            @if ($errors->has('loginError'))
                <p class="error">{{ $errors->first('loginError') }}</p>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>CLOUD <span>SMP</span></h1>
                <h2>Login Page</h2>
                <label for="gamertag">
                    <i class="fa-solid fa-user"></i> Gamertag
                </label>
                <input id="gamertag" type="text" name="gamertag" placeholder="Masukkan Gamertag.."
                    autocomplete="off" required />
                <label for="password">
                    <i class="fa-solid fa-lock"></i> Password
                </label>
                <input id="password" type="password" name="password" placeholder="Password" autocomplete="off"
                    required />
                <button type="submit">Login</button>
                <p class="footer-text">
                    Lupa Password?
                    <a href="forgot-password.html">Silahkan Hubungi Admin</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>
