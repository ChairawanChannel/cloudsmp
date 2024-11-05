<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin - CLOUD SMP</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>
  <body>
    <!-- login.html -->
    <div class="login-page">
      <div class="login-container">
        <form action="index.html">
          <h1>CLOUD <span>SMP</span></h1>
          <h2>Admin Login Page</h2>
          <label for="username"
            ><i class="fa-solid fa-user"></i> Username</label
          >
          <input
            id="username"
            type="text"
            placeholder="Masukkan Username.."
            autocomplete="off"
          />
          <label for="password"
            ><i class="fa-solid fa-lock"></i> Password</label
          >
          <input
            id="password"
            type="password"
            placeholder="Masukkan Password.."
            autocomplete="off"
          />
          <button>Login</button>
          <p class="footer-text">
            Lupa Password?
            <a href="forgot-password.html">Silahkan Hubungi Admin</a>
          </p>
        </form>
      </div>
    </div>

    <script src="assets/javascript/script.js"></script>
  </body>
</html>