<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('volt/assets/img/favicon/favicon-bmkg.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title>Aplikasi Inventaris Alat</title>
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
            align-items: center;
            gap: 0.938rem;
            padding: 1.25rem 3.125rem;
        }

        header .logo-img {
            width: 3rem;
            height: auto;
            transform: translateY(-68px);
            animation: fadeSlide 1.2s ease-out forwards;
        }

        header .logo {
            font-size: 2rem;
            font-weight: bold;
            color: #002B5B;
            transform: translateY(-68px);
            animation: fadeSlide 1.2s ease-out forwards;
            animation-delay: 0.3s;
        }

        .welcome {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-bottom: 150px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeSlide 1s ease-out forwards;
        }

        .welcome h1 {
            font-size: 3.25rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: #002B5B;
        }

        .welcome p {
            font-size: 1.375rem;
            margin-bottom: 30px;
            color: #004080;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.875rem;
            background-color: #004080;
            color: #fff;
            font-size: 1.125rem;
            font-weight: bold;
            text-decoration: none;
            border-radius: 1.875rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: background 0.3s ease-in-out, transform 0.3s ease-in-out;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeSlide 1s ease-out forwards;
            animation-delay: 0.4s;
        }

        .btn:hover {
            background-color: #002b5b;
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
        <img src="{{ asset('volt/assets/img/BMG_2003.png') }}" alt="Logo BMKG" class="logo-img">
        <div class="logo">Stamet Banyuwangi</div>
    </header>


    <section class="welcome">
        <h1>Selamat Datang di Aplikasi Inventaris Alat BMKG</h1>
        <p>Silakan masuk untuk melanjutkan.</p>
        <a href="{{ route('auth.login') }}" class="btn">Masuk</a>
    </section>

    {{-- <footer>
    &copy; 2025 Website Kami. All Rights Reserved.
  </footer> --}}
</body>

</html>