<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cloud SMP')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <!-- Tambahkan Navbar -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/vote">Vote</a></li>
                <li><a href="/feedback">Feedback</a></li>

                <!-- Cek status login dari sesi -->
                @if (Session::has('gamertag'))
                    <li>
                        <!-- Tombol Logout ketika user login -->
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="logout-button">Logout</button>
                        </form>
                    </li>
                @else
                    <!-- Tombol Login ketika user belum login -->
                    <li><a href="{{ route('login') }}" class="login-button">Login</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
