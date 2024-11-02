<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cloud SMP - Home</title>
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Google Fonts -->
    <link
      href="https://fonts.cdnfonts.com/css/sf-pro-display"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <div class="logo">CLOUD<span>SMP</span></div>
      <!-- Navigation Links -->
      <div class="nav-links">
        <a href="#home" class="nav-link"
          ><i class="fa fa-home" aria-hidden="true"></i> Home</a
        >
        <a href="#about" class="nav-link"
          ><i class="fas fa-book-open"></i> About</a
        >
        <a href="#ranks" class="nav-link"
          ><i class="fa-solid fa-coins"></i> Ranks</a
        >
        <a href="#topup" class="nav-link"
          ><i class="fa-solid fa-circle-dollar-to-slot"></i> Topup</a
        >
        <a href="feedback.html" class="nav-link"
          ><i class="fa-solid fa-comments"></i> Feedback</a
        >
        <a href="#vote" class="nav-link"
          ><i class="fa-solid fa-pen-clip"></i> Vote</a
        >
      </div>

      <!-- Profile Menu and Burger Icon -->
      <div class="navbar-right">
        <label class="popup">
          <input type="checkbox" />
          <div tabindex="0" class="burger">
            <svg
              viewBox="0 0 24 24"
              fill="white"
              height="20"
              width="20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"
              ></path>
            </svg>
          </div>
          <nav class="popup-window">
            <legend>Quick Start</legend>
            <ul>
              <li>
                <button>
                  <svg
                    width="14"
                    height="14"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.2"
                    stroke-linecap="round"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M19 4v6.406l-3.753 3.741-6.463-6.462 3.7-3.685h6.516zm2-2h-12.388l1.497 1.5-4.171 4.167 9.291 9.291 4.161-4.193 1.61 1.623v-12.388zm-5 4c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm6.708.292l-.708.708v3.097l2-2.065-1.292-1.74zm-12.675 9.294l-1.414 1.414h-2.619v2h-2v2h-2v-2.17l5.636-5.626-1.417-1.407-6.219 6.203v5h6v-2h2v-2h2l1.729-1.729-1.696-1.685z"
                    ></path>
                  </svg>
                  <a
                    href="login.html"
                    style="
                      text-decoration: none;
                      color: black;
                      text-transform: uppercase;
                    "
                    >LOGIN</a
                  >
                </button>
              </li>
            </ul>
          </nav>
        </label>
      </div>
    </nav>
    <!-- Navbar End -->
    <!-- Notification Start -->
    <div class="alert">
      <i class="fa-solid fa-bell"></i>
      <span>
        <strong>Lupa Password?</strong> Silahkan Hubungi Admin Discord untuk
        mereset password anda!
        <a href="#" target="_blank"
          >Klik disini untuk menghubungi Admin Discord</a
        >
      </span>
      <button class="close-btn">&times;</button>
    </div>
    <!-- Notification End -->
    <!-- Back to Top Button -->
    <button id="backToTop" class="button-top">
      <!-- SVG Icon for Back to Top -->
      <svg class="svgIcon" viewBox="0 0 384 512">
        <path
          d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
        ></path>
      </svg>
    </button>

    <!-- Carousel Section -->
    <div id="home" class="carousel-container">
      <div class="carousel-text">
        <h2 class="welcome">Welcome to Cloud SMP</h2>
        <p>Explore the server and enjoy your adventure</p>
        <!-- Buttons -->
        <div class="button-container">
          <button class="join-button">Join the Server</button>
          <button class="discord-button">
            <i class="fa-brands fa-discord"></i>
          </button>
          <button class="vote-button">Vote Server!</button>
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
            <img
              src="{{ asset('image/icon/money-bag-svgrepo-com.png') }}"
              alt=""
              class="logo-survival-economy"
            />
            <p class="mode-deskripsi">Survival Economy</p>
          </div>
          <div class="mode-item">
            <img
              src="{{ asset('image/icon/appartment-3-svgrepo-com.png') }}"
              alt=""
              class="logo-skyblock"
            />
            <p class="mode-deskripsi">Skyblock</p>
          </div>
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
          <img src="{{ asset('image/icon/rank cloud+.png') }}" alt="" />
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
          <button class="rank-button">Beli</button>
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
          <button class="rank-button">Vote</button>
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
          <button class="rank-button">Beli</button>
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
          <button class="rank-button">Beli</button>
        </div>
        <div class="rank-box">
          <img src="{{ asset('image/icon/rank cloud+.png') }}" alt="" />
          <h3 class="rank-name">Galaxy</h3>
          <p class="rank-harga">Rp75.000</p>
          <p class="rank-description">
            • /fly <br />• /heal <br />
            • /wings (Unlock 3 Wings) <br />
            • /Hat (Unlock 3 Hat) <br />• 20000 CC
          </p>
          <button class="rank-button">Beli</button>
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
          <button class="topup-button">Beli</button>
        </div>
        <div class="topup-container">
          <h3 class="topup-paket">Paket Saturnus</h3>
          <p class="topup-description">
            Cloud Coins : 60.000CC <br />Cloud Premium Keys : 5x Keys <br />
            Cloud Basic Keys : 6x Keys <br />
            Cloud Cosmetic Keys : 3x Keys
          </p>
          <p class="topup-harga">Harga: Rp25.000</p>
          <button class="topup-button">Beli</button>
        </div>
      </div>
    </div>
    <!-- Topup End -->
    <!-- Review Start -->

    <!-- Carousel Controls -->
    <div id="review" class="review">
      <h2 class="title-review">Review</h2>
      <p class="description-content-in-heading">
        Ini adalah review dari kalian!
      </p>
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
    <footer class="footer">
      <p>Cloud SMP &copy; 2024 - All Rights Reserved</p>
    </footer>
    <!-- Footer End -->

    <!-- JavaScript for Carousel Functionality -->
    <script src="{{ asset('javascript/script.js') }}"></script>
  </body>
</html>
