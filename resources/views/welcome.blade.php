<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      flex-direction: column;
      background: url('/background/wave_background-15_generated.jpg') no-repeat center bottom;
      background-size: cover;
      color: #002B5B;
      overflow: hidden;
    }

    header {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: 20px 50px;
    }

    header .logo {
      font-size: 24px;
      font-weight: bold;
      color: #002B5B;
    }

    .welcome {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeSlide 1s ease-out forwards;
    }

    .welcome h1 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 15px;
      color: #002B5B;
    }

    .welcome p {
      font-size: 20px;
      margin-bottom: 30px;
      color: #004080;
    }

    .btn {
      display: inline-block;
      padding: 12px 30px;
      background-color: #004080;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 30px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      transition: background 0.3s ease-in-out, transform 0.3s ease-in-out;
      opacity: 0;
      transform: translateY(30px);
      animation: fadeSlide 1s ease-out forwards;
      animation-delay: 0.5s;
    }

    .btn:hover {
      background-color: #0066cc;
      transform: translateY(-3px);
    }

    /* footer {
      text-align: center;
      padding: 15px;
      font-size: 14px;
      background: rgba(0, 64, 128, 0.2);
      color: #002B5B;
    } */

    @keyframes fadeSlide {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">LOGO</div>
  </header>

  <section class="welcome">
    <h1>Selamat Datang di Website Kami</h1>
    <p>Kami senang Anda berkunjung, silakan login untuk melanjutkan.</p>
    <a href="login.html" class="btn">Login</a>
  </section>

  {{-- <footer>
    &copy; 2025 Website Kami. All Rights Reserved.
  </footer> --}}
</body>
</html>
