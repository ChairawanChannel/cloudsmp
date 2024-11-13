<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - CLOUD SMP</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <!-- Login Form Section -->
    @if (session('error'))
        <div class="alert alert-danger">
            <i class="fa fa-times-circle"></i>
            <span><strong>Error!</strong> {{ session('error') }}</span>
            <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
        </div>
    @endif
    <div class="login-page">
        <div class="login-container">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>CLOUD <span>SMP</span></h1>
                <h2>Login Page</h2>

                <label for="gamertag"><i class="fa-solid fa-user"></i> Gamertag</label>
                <input id="gamertag" type="text" name="gamertag" placeholder="Masukkan Gamertag.." required
                    autocomplete="off" />

                <label for="password"><i class="fa-solid fa-lock"></i> Password</label>
                <input id="password" type="password" name="password" placeholder="Password" required
                    autocomplete="off" />
                <div>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>

                <button type="submit">Login</button>

                <p class="footer-text">
                    Lupa Password? <a href="forgot-password.html">Silahkan Hubungi Admin</a>
                </p>
            </form>
        </div>
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
