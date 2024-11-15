<?php
      session_start(); // Mulai sesi
      require_once "function.php";
  
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nim = $_POST["nim"];
          $password = $_POST["password"];
  
          // Query untuk mencari user berdasarkan username
          $query = "SELECT * FROM tb_mahasiswa WHERE nim = '$nim'";
          $result = mysqli_query($koneksi, $query);
  
          if ($result) {
              $user = mysqli_fetch_assoc($result);
              if ($user && password_verify($password, $user["password"])) {
                  // Login berhasil
                  $_SESSION["nim"] = $nim;
                  header("Location: dashboard.php"); // Arahkan ke halaman dashboard
                  exit;
              } else {
                  echo "<script>alert('Username atau password salah');</script>";
              }
          } else {
              echo "<script>alert('Terjadi kesalahan dalam mengambil data pengguna');</script>";
          }
      }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="login.css" />

    <!-- Box Icon -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Boostrep -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: "Poppins", sans-serif;
          letter-spacing: 1.1px;
      }

      :root{
          --text-color-1: rgba(253, 240, 240, 1);
          --text-color-2: rgba(25, 64, 124, 1);
          --text-color-3: rgba(79, 145, 246, 1);
          --text-color-4: white;
          --text-color-5: rgba(217, 217, 217, 1);
          --text-color-6: black;
      }


      body{
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          width: 100%;
          height: 100vh;
          background-image: linear-gradient(to bottom, rgba(25, 64, 124, 1),  rgb(129, 180, 255));
          background-position: center;
          background-size: cover;
      }

      .login-box{
          position: relative;
          display: flex;
          text-align: center;
          justify-content: center;
          flex-direction: column;
          width: 440px;
          height: 440px;
          padding: 30px;
      }

      .logo h1{
          position: absolute;
          font-size: 30px;
          justify-content: center;
          text-align: center;
          color: var(--text-color-1);
          width: 380px;
          margin: -60px 0 50px;
          border-bottom: 4px solid;
      }

      .login-header h2{
          text-align: center;
          color: var(--text-color-1);
          margin: 100px 0 50px 0;
      }

      .input-box {
          position: relative;
          width: 380px;
          margin: -10px 0 50px;
          border-bottom: 2px solid;
          color: var(--text-color-1);
      }

      .input-box input {
          width: 100%;
          height: 50px;
          margin-left: 0px;
          background: transparent;
          border: none;
          outline: none;
          font-size: 1em;
          color: var(--text-color-1);
          padding: 0 35px 0 5px;
      }

      .input-box input::placeholder  {
          color: var(--text-color-1);
      }

      .input-box .icon {
          position: absolute;
          right: 25px;
          color: var(--text-color-1);
          font-size: 1em;
          line-height: 55px;
      }

      .btn-hover button{
          color:var(--text-color-1); 
          background-color: var(--text-color-2); 
          border: 2px solid var(--text-color-1); 
      }

      .btn-hover button:hover{
          background-color: var(--text-color-1);
          color: var(--text-color-2);
      }

      .signup-link {
          font-size: .8em;
          color: var(--text-color-1);
          text-align: center;
          margin: 25px 0 10px;
      }

      .signup-link p a {
          color: var(--text-color-1);
          text-decoration: none;
          font-weight: 600;
      }

      .signup-link p a:hover {
          text-decoration: underline;
      }

      @media (max-width: 360px) {
          .login-box {
              width: 100%;
              height: 100vh;
              border: none;
              border-radius: 0;
          }
      }

    </style>

  </head>
  <body>

    <div class="login-box">
      <div class="logo">
        <h1>< Praktikoem WEB /></h1>
      </div>
      <div class="login-header">
        <h2>Log In</h2>
      </div>

      <form action="dashboard.html" method="POST">
        <div class="input-box">
          <span class="icon"><i class="bx bx-user"></i></span>
          <input type="text" placeholder="NIM" autocomplete="on" required/>
        </div>
        <div class="input-box">
          <span class="icon"><i class="bx bx-lock"></i></span>
          <input type="password" placeholder="Password" autocomplete="off" required/>
        </div>

          <a href="dashboard.html"><button class="text-center btn-hover btn rounded-5 w-50">Log In</button></a>
        
          <div class="signup-link">
          <p>Don’t you have an account? <a href="signup.php">Sign Up</a></p>
        </div>
      </form>

    </div>

      
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
