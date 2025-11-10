<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg
* License: https://themesberg.com/licensing
* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login - Aplikasi Inventaris BMKG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Metadata -->
    <meta name="description" content="Halaman login aplikasi inventaris BMKG berbasis Volt Bootstrap 5 Dashboard.">
    <meta name="keywords" content="bmkg, volt dashboard, login, bootstrap 5">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('volt/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('volt/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('volt/assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('volt/assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('volt/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Tabler Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/css/tabler.min.css" />

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('volt/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('volt/css/volt.css') }}" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1d3557 0%, #457b9d 100%);
            min-height: 100vh;
        }

        .login-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transition: transform .2s ease;
        }

        .login-card:hover {
            transform: translateY(-4px);
        }

        .logo-bmkg {
            width: 80px;
            height: auto;
            margin-bottom: 10px;
        }

        .login-title {
            font-weight: 600;
            color: #1d3557;
        }

        .btn-login {
            background-color: #1d3557;
            color: white;
            border-radius: 8px;
        }

        .btn-login:hover {
            background-color: #16324f;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(69, 123, 157, 0.25);
        }
    </style>
</head>

<body>
    <main>
        <section class="vh-lg-100 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-5">
                        <div class="login-card p-4 p-lg-5">
                            <div class="text-center mb-4">
                                <img src="{{ asset('volt/assets/img/BMG_2003.png') }}"
                                    alt="Logo Instansi" style="width: 100px; height: 100px;">
                                <h3 class="login-title">Aplikasi Inventaris BMKG</h3>
                                <p class="text-muted small mb-0">Silakan masuk untuk melanjutkan</p>
                            </div>

                            <form action="{{ route('auth.login') }}" method="POST" class="mt-4">
                                @csrf
                                <!-- NIP -->
                                <div class="form-group mb-4">
                                    <label for="nip" class="fw-semibold">NIP</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <svg class="icon icon-xs text-gray-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5.121 17.804A9 9 0 1118.879 17.804M12 11a4 4 0 100-8 4 4 0 000 8z" />
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror"
                                            placeholder="Masukkan NIP Anda" id="nip" name="nip" required>
                                        <div class="invalid-feedback">
                                            @error('nip') {{ $message }} @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group mb-3">
                                    <label for="password" class="fw-semibold">Kata Sandi</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <input type="password" placeholder="Masukkan kata sandi akun anda"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            name="password" required>
                                        <div class="invalid-feedback">
                                            @error('password') {{ $message }} @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember">
                                        <label class="form-check-label small" for="remember">
                                            Ingat saya
                                        </label>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-login">Masuk</button>
                                </div>
                            </form>

                            <div class="text-center mt-4">
                                <small class="text-muted">© 2025 Badan Meteorologi, Klimatologi, dan Geofisika</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
    <script src="{{ asset('volt/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('volt/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('volt/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

    <!-- Slider -->
    <script src="{{ asset('volt/vendor/nouislider/distribute/nouislider.min.js') }}"></script>

    <!-- Smooth scroll -->
    <script src="{{ asset('volt/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Charts -->
    <script src="{{ asset('volt/vendor/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('volt/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ asset('volt/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

    <!-- Sweet Alerts 2 -->
    <script src="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="{{ asset('volt/vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>

    <!-- Notyf -->
    <script src="{{ asset('volt/vendor/notyf/notyf.min.js') }}"></script>

    <!-- Simplebar -->
    <script src="{{ asset('volt/vendor/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="{{ asset('volt/assets/js/volt.js') }}"></script>

</body>

</html>