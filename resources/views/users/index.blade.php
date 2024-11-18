<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cloud SMP - Home</title>
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Google Fonts -->
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>
    <!-- Navbar Start -->
    @include('partials.navbar')
    <!-- Navbar End -->

    <!-- Back to Top Button -->
    <button id="backToTop" class="button-top">
        <!-- SVG Icon for Back to Top -->
        <svg class="svgIcon" viewBox="0 0 384 512">
            <path
                d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
            </path>
        </svg>
    </button>
    <!-- Notification Start -->
    <!-- Notification Info -->
    <div class="alert alert-info" id="alert-notification" style="display: none;">
        <i class="fa fa-info-circle"></i>
        <span>
            <strong>Lupa Password?</strong> Silahkan Hubungi Admin Discord untuk mereset password anda!
            <a href="https://discord.gg/xYdWWxREPZ" target="_blank">Klik disini untuk menghubungi Admin
                Discord</a>
        </span>
        <button class="close-btn" onclick="closeAlert()">&times;</button>
    </div>

    <!-- Notification End -->
    <!-- Carousel Section -->
    <div id="home" class="carousel-container">
        <div class="carousel-text">
            <h2 class="welcome">Welcome to Cloud SMP</h2>
            <p>Explore the server and enjoy your adventure</p>
            <!-- Buttons -->
            <div class="button-container">
                <button class="join-button">Join the
                    Server</button>
                <a href="https://discord.gg/xYdWWxREPZ" target="_blank"><button class="discord-button">
                        <i class="fa-brands fa-discord"></i>
                    </button></a>
                <a href="/vote" style="text-decoration: none;"><button class="vote-button">Vote
                        Server!</button></a>
            </div>
            <div class="onlinetxt" id="playerCount">ONLINE PLAYER: 0</div>
        </div>
        <!-- Carousel Slides -->
        <div class="carousel-slide active">
            <img src="{{ asset('image/2024-09-25_15.54.33.png') }}" alt="Image 1" />
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('image/2024-10-08_22.59.03.png') }}" alt="Image 2" />
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('image/2024-10-04_19.52.50.png') }}" alt="Image 3" />
        </div>
        <!-- Carousel Navigation Buttons -->
        <button class="prev-btn" onclick="prevSlide()">&#10094;</button>
        <button class="next-btn" onclick="nextSlide()">&#10095;</button>
    </div>
    <!-- Carousel End -->

    <!-- Game Modes Section -->
    <div class="mode-container">
        <div class="mode-header">
            <h2>Mode Yang Bisa Dimainkan</h2>
            <div class="mode-list">
                <!-- Game Mode Item -->
                <div class="mode-item">
                    <img src="{{ asset('image/icon/money-bag-svgrepo-com.png') }}" alt=""
                        class="logo-survival-economy" />
                    <p class="mode-deskripsi">Survival Economy</p>
                </div>
                {{-- <div class="mode-item">
                    <img src="{{ asset('image/icon/appartment-3-svgrepo-com.png') }}" alt=""
                        class="logo-skyblock" />
                    <p class="mode-deskripsi">Skyblock</p>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Game Modes End -->

    <!-- About Section -->
    <div id="about" class="about">
        <h2 class="title-about">Sejarah singkat <span>Cloud SMP?</span></h2>
        <p class="detail-about">
            <span>Cloud SMP</span> adalah sebuah server minecraft yang berdiri sejak
            2021. Cloud SMP pertama kali di rilis oleh
            <span>Chairawan Channel</span> pada Youtube nya.
            <span>Cloud SMP</span> Pertama kali di buat untuk user minecraft
            bedrock, dan mulai masuk untuk user java pada Season Reborn nya, yaitu
            <span>Cloud SMP Reborn Season 2</span>
        </p>
    </div>
    <!-- About End -->

    <!-- Ranks Section -->
    <div id="ranks" class="ranks">
        <h2 class="title-ranks">Ranks</h2>
        <p class="description-content-in-heading">
            CLOUD SMP menyediakan rank untuk membuat anda semakin op di server!
        </p>
        <div class="rank-container">
            <!-- Rank Box Item -->
            <div class="rank-box">
                <img src="{{ asset('image/icon/Untitled 1.png') }}" alt="" />
                <h3 class="rank-name">Cloud</h3>
                <p class="rank-harga">Free</p>
                <p class="rank-description">Tidak Ada Fitur</p>
            </div>
            <div class="rank-box">
                <img src="{{ asset('image/icon/Chairawan8.png') }}" alt="" />
                <h3 class="rank-name">Cloud+</h3>
                <p class="rank-harga">Rp20.000</p>
                <p class="rank-description">
                    • /fly <br />• /heal <br />
                    • /wings (Unlock 3 Wings) <br />
                    • /Hat (Unlock 3 Hat) <br />• 20000 CC
                </p>
                <a href="https://discord.gg/xYdWWxREPZ" target="_blank"><button class="rank-button">Beli</button></a>
            </div>
            <div class="rank-box">
                <img src="{{ asset('image/icon/XIV Lightroom.png') }}" alt="" />
                <h3 class="rank-name">Voter</h3>
                <p class="rank-harga">Free</p>
                <p class="rank-description">
                    • /hat(Unlock 1 Hat) <br />• 20000 CC <br /><br />
                    <br />
                    <br />
                </p>
                <a href="#" target="_blank"><button class="rank-button">Vote</button></a>
            </div>
            <div class="rank-box">
                <img src="{{ asset('image/icon/XIV 1.png') }}" alt="" />
                <h3 class="rank-name">Star</h3>
                <p class="rank-harga">Rp25.000</p>
                <p class="rank-description">
                    • /fly <br />• /heal <br />
                    • /wings (Unlock 3 Wings) <br />
                    • /Hat (Unlock 3 Hat) <br />• 25000 CC
                </p>
                <a href="https://discord.gg/xYdWWxREPZ" target="_blank"><button class="rank-button">Beli</button></a>
            </div>
            <div class="rank-box">
                <img src="{{ asset('image/icon/XIV Lightroom.png') }}" alt="" />
                <h3 class="rank-name">Sky</h3>
                <p class="rank-harga">Rp50.000</p>
                <p class="rank-description">
                    • /fly <br />• /heal <br />
                    • /wings (Unlock 3 Wings) <br />
                    • /Hat (Unlock 3 Hat) <br />• 20000 CC
                </p>
                <a href="https://discord.gg/xYdWWxREPZ" target="_blank"><button class="rank-button">Beli</button></a>
            </div>
            <div class="rank-box">
                <img src="{{ asset('image/icon/asasd.png') }}" alt="" />
                <h3 class="rank-name">Galaxy</h3>
                <p class="rank-harga">Rp75.000</p>
                <p class="rank-description">
                    • /fly <br />• /heal <br />
                    • /wings (Unlock 3 Wings) <br />
                    • /Hat (Unlock 3 Hat) <br />• 20000 CC
                </p>
                <a href="https://discord.gg/xYdWWxREPZ" target="_blank"><button class="rank-button">Beli</button></a>
            </div>
            <!-- Repeat Rank Boxes as needed -->
        </div>
    </div>
    <!-- Ranks End -->

    <!-- Topup Section -->
    <div id="topup" class="topup">
        <h2 class="title-topup">Topup</h2>
        <p class="description-content-in-heading">
            Kehabisan resource di server? ayo topup sekarang!
        </p>
        <div class="topup-container-wrapper">
            <div class="topup-container">
                <h3 class="topup-paket">Paket Bulan</h3>
                <p class="topup-description">
                    Cloud Coins : 50.000CC <br />Cloud Premium Keys : 2x Keys <br />
                    Cloud Basic Keys : 5x Keys <br />
                    Cloud Cosmetic Keys : 3x Keys
                </p>
                <p class="topup-harga">Harga: Rp20.000</p>
                <a href="https://discord.gg/xYdWWxREPZ" target="_blank"><button
                        class="topup-button">Beli</button></a>
            </div>
            <div class="topup-container">
                <h3 class="topup-paket">Paket Saturnus</h3>
                <p class="topup-description">
                    Cloud Coins : 60.000CC <br />Cloud Premium Keys : 5x Keys <br />
                    Cloud Basic Keys : 6x Keys <br />
                    Cloud Cosmetic Keys : 3x Keys
                </p>
                <p class="topup-harga">Harga: Rp25.000</p>
                <a href="https://discord.gg/xYdWWxREPZ" target="_blank"><button
                        class="topup-button">Beli</button></a>
            </div>
        </div>
    </div>
    <!-- Topup End -->
    <!-- Review Start -->

    <!-- Carousel Controls -->
    <div id="review" class="review">
        <h2 class="title-review">Feedback</h2>
        <p class="description-content-in-heading">
            Feedback dari kalian sangat berarti untuk server ini agar terus berkembang!!
        </p>
        <a class="review-button" href="/feedback">Beri Feedback</a>
    </div>
    <!-- Comment Section -->
    <div class="comment-section">
        <div class="comment-container">
            <div class="comment-section">
                <!-- Comment 1 -->
                <div class="comment-card">
                    <div class="comment-header">
                        <div>
                            <p class="username">Kineryy</p>
                            <p class="timestamp">5 days ago</p>
                        </div>
                    </div>
                    <div class="comment-body">
                        <p>
                            The Best dah pokoknya. banyak item item baru, paling suka fitur
                            minion di skyblock sih.
                        </p>
                    </div>
                </div>

                <!-- Comment 2 -->
                <div class="comment-card">
                    <div class="comment-header">
                        <div>
                            <p class="username">ZeroGX</p>
                            <p class="timestamp">4 hours ago</p>
                        </div>
                    </div>
                    <div class="comment-body">
                        <p>
                            Server keren yang pernah ada. baru kali ini main server survival
                            sebagus ini! bahkan ada skyblocknya, gila sih.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Review End -->

    <!-- Footer -->
    <footer>
        <div style="position: static" class="footer-container">
            <div class="footer-logo">
                <img src="{{ asset('image/icon/logo_server_cloudsmp_HD_-removebg-preview.png') }}"
                    alt="Cloud SMP Logo" />
            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#ranks">Ranks</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="#vote">Vote</a></li>
                    <li><a href="/reedemcode">Reedem Code</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <a href="https://discord.com" target="_blank">
                    <i class="fa-brands fa-discord"></i>
                </a>
                <a href="https://wa.me" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i> </a>
            </div>
            <div class="footer-copyright">
                <hr />
                <p>Cloud SMP &copy; 2024 - All Rights Reserved</p>
            </div>
        </div>
    </footer>


    <!-- Footer End -->

    <!-- JavaScript for Carousel Functionality -->
    <script src="{{ asset('javascript/script.js') }}"></script>
</body>

</html>
