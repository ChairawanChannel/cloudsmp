<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cloud SMP - Home</title>
    <link rel="shortcut icon" href="{{ asset('image/icon/logo_server_cloudsmp_HD_-removebg-preview.png') }}"
        type="image/x-icon">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Google Fonts -->
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
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

                <button type="submit">Login</button>

                <p class="footer-text">
                    Lupa Password? <a href="https://discord.gg/xYdWWxREPZ" target="blank">Silahkan Hubungi Admin</a>

                </p>
            </form>
        </div>
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
