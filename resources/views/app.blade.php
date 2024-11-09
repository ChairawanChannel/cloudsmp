<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cloud SMP')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <header>
        <!-- Tambahkan Navbar -->
        <!-- resources/views/partials/navbar.blade.php -->
        <nav class="navbar">
            <div class="logo">CLOUD<span>SMP</span></div>
            <div class="nav-links">
                <a href="/admin" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                <a href="/admin/table-feedback" class="nav-link"><i class="fa-solid fa-database"></i> Table Feedback</a>
                <a href="/admin/table-vote" class="nav-link"><i class="fa-solid fa-table"></i> Table Vote</a>
                <a href="/admin/table-transactions" class="nav-link"><i class="fa-solid fa-bag-shopping"></i> Table
                    Transactions</a>
            </div>
            <div class="navbar-right">
                <label class="popup">
                    <input type="checkbox" />
                    <div tabindex="0" class="burger">
                        <svg viewBox="0 0 24 24" fill="white" height="20" width="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z">
                            </path>
                        </svg>
                    </div>
                    <nav class="popup-window">
                        <legend>Quick Start</legend>
                        <ul>
                            <li>
                                @if (session()->has('gamertag'))
                                    <button>
                                        <a href="/logout"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            style="text-decoration: none; color: black; text-transform: uppercase;">LOGOUT</a>
                                    </button>
                                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <button>
                                        <a href="/login"
                                            style="text-decoration: none; color: black; text-transform: uppercase;">LOGIN</a>
                                    </button>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </label>
            </div>
        </nav>

    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
