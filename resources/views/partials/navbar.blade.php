<!-- resources/views/partials/navbar.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>@yield('title', 'Cloud SMP')</title>
</head>

<body>

</body>

</html><!-- Navbar Start -->
<nav class="navbar">
    <div class="logo"><img src="{{ asset('image/icon/logo_server_cloudsmp_HD_-removebg-preview.png') }}"
            alt=""></div>
    <!-- Navigation Links -->
    <div class="nav-links">
        <a href="/" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="/#about" class="nav-link"><i class="fas fa-book-open"></i> About</a>
        <a href="/#ranks" class="nav-link"><i class="fa-solid fa-coins"></i> Ranks</a>
        <a href="/#topup" class="nav-link"><i class="fa-solid fa-circle-dollar-to-slot"></i> Topup</a>
        <a href="/feedback" class="nav-link"><i class="fa-solid fa-comments"></i> Feedback</a>
        <a href="https://minecraft-mp.com/server/338140/vote/" target="blank" class="nav-link"><i
                class="fa-solid fa-pen-clip"></i>
            Vote</a>
        <a href="/reedemcode" class="nav-link"><i class="fa-solid fa-inbox"></i> Reedem Code</a>
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
                            <form action="/logout" method="POST" style="display: inline;">
                                @csrf
                                <button>
                                    <i class="fa-regular fa-user" style="font-size: 14px; color: red"></i>
                                    <p
                                        style="
                      text-decoration: none;
                      color: rgb(65, 58, 58);
                      text-transform: uppercase;
                    ">
                                        {{ session('gamertag') }}</p>
                                </button>
                                <button type="submit"
                                    style="background: none; border: none; color: black; text-transform: uppercase;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19 4v6.406l-3.753 3.741-6.463-6.462 3.7-3.685h6.516zm2-2h-12.388l1.497 1.5-4.171 4.167 9.291 9.291 4.161-4.193 1.61 1.623v-12.388zm-5 4c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm6.708.292l-.708.708v3.097l2-2.065-1.292-1.74zm-12.675 9.294l-1.414 1.414h-2.619v2h-2v2h-2v-2.17l5.636-5.626-1.417-1.407-6.219 6.203v5h6v-2h2v-2h2l1.729-1.729-1.696-1.685z">
                                        </path>
                                    </svg>
                                    LOGOUT
                                </button>

                            </form>
                        @else
                            <button>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 4v6.406l-3.753 3.741-6.463-6.462 3.7-3.685h6.516zm2-2h-12.388l1.497 1.5-4.171 4.167 9.291 9.291 4.161-4.193 1.61 1.623v-12.388zm-5 4c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm6.708.292l-.708.708v3.097l2-2.065-1.292-1.74zm-12.675 9.294l-1.414 1.414h-2.619v2h-2v2h-2v-2.17l5.636-5.626-1.417-1.407-6.219 6.203v5h6v-2h2v-2h2l1.729-1.729-1.696-1.685z">
                                    </path>
                                </svg>
                                <a href="/login"
                                    style="
                      text-decoration: none;
                      color: black;
                      text-transform: uppercase;
                    ">LOGIN</a>
                            </button>
                        @endif
                    </li>
                </ul>
            </nav>
        </label>
    </div>
</nav>
