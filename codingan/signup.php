<?php
    require_once "function.php";

    if(ISSET($_POST["daftar"]))
    {
        if(daftar($_POST) > 0)
        {
            echo "<script>
            alert('Akun berhasil dibuat');
            document.location.href = 'login.php';
            </script>";
        } else{
            $error_message = mysqli_connect_error();
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="login.css" />

    <!-- Box Icon -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
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
            --text-color-1: rgb(255, 203, 203);
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
            background-image: linear-gradient(to bottom, rgb(239, 195, 195), white);
            background-position: center;
            background-size: cover;
        }

        .signup-box{
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
            color: var(--text-color-2);
            width: 380px;
            margin: 40px 0 50px 0;
            border-bottom: 4px solid;
        }

        .signup-header h2{
            text-align: center;
            color: var(--text-color-2);
            margin: 150px 0 50px 0;
        }

        .input-box {
            position: relative;
            width: 380px;
            margin: 0px 0 20px 0;
            border-bottom: 2px solid;
            color: var(--text-color-2);
        }

        .input-box input {
            width: 100%;
            height: 50px;
            margin-left: 0px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            color: var(--text-color-2);
            padding: 0 35px 0 5px;
        }

        .input-box input::placeholder  {
            color: var(--text-color-2);
        }

        .input-box .icon {
            position: absolute;
            right: 25px;
            color: var(--text-color-2);
            font-size: 1em;
            line-height: 55px;
        }

        .btn-hover button{
            color:var(--text-color-2); 
            background-color: var(--text-color-1); 
            border: 2px solid var(--text-color-2); 
        }

        .btn-hover button:hover{
            background-color: var(--text-color-2);
            color: var(--text-color-1);
        }

        .login-link {
            font-size: .8em;
            color: var(--text-color-2);
            text-align: center;
            margin: 25px 0 10px;
        }

        .login-link p a {
            color: var(--text-color-2);
            text-decoration: none;
            font-weight: 600;
        }

        .login-link p a:hover {
            text-decoration: underline;
        }

        @media (max-width: 360px) {
            .signup-box {
                width: 100%;
                height: 100vh;
                border: none;
                border-radius: 0;
            }
        }
    </style>

  </head>
  <body>
    <div class="signup-box">
        <div class="logo">
            <h1>< Praktikoem WEB /></h1>
        </div>
        <div class="signup-header">
            <h2>Create an account</h2>
        </div>
        <form action="login.php" method="GET">
        <div class="input-box">
            <span class="icon"><i class="bx bx-user"></i></span>
            <input type="text" placeholder="Full Name" autocomplete="on" required />
        </div>
        <div class="input-box">
            <span class="icon"><i class="bx bx-user"></i></span>
            <input type="text" placeholder="NIM" autocomplete="on" required />
        </div>
        <div class="input-box">
            <span class="icon"><i class="bx bx-lock"></i></span>
            <input type="password" placeholder="Password" autocomplete="off" required/>
        </div>
        <div class="input-box">
            <span class="icon"><i class="bx bx-lock"></i></span>
            <input type="password" placeholder="Confirm Password" autocomplete="off" required/>
        </div>
        <div class="text-center btn-hover">
            <a href="login.php"><button class="btn rounded-5 w-50">Sign Up</button></a>
        </div>
      <div class="login-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </div>

        </form>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
