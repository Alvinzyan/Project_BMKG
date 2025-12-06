<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Pos Bandara BWI - Aplikasi Inventaris Alat BMKG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="og:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="twitter:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('volt/assets/img/favicon/favicon-bmkg.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('volt/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('volt/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('volt/css/volt.css') }}" rel="stylesheet">

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    <nav class="navbar navbar-dark px-4 col-12 d-lg-none" style="background-color: #1E3D58">
        <a class="navbar-brand me-lg-5" href="/inventaris-alat">
            <img class="navbar-brand-dark me-2" src="{{ asset('volt/assets/img/BMG_2003.png') }}" alt="Logo BMKG" />Stamet Banyuwangi<img
                class="navbar-brand-light" src="{{ asset('volt/assets/img/BMG_2003.png') }}" alt="Logo BMKG" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block text-white collapse" data-simplebar>
        @include('template.sidebar')
    </nav>

    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            @include('template.navbar')
        </nav>

        <div class="d-flex align-items-center py-4">
            <a href="/inventaris-alat" class="hover-back">
                <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l14 0" />
                    <path d="M5 12l6 6" />
                    <path d="M5 12l6 -6" />
                </svg>
            </a>

            <div class="d-flex align-items-center justify-content-center text-white rounded me-2 me-sm-2 flex-shrink-0"
                style="width: 45px; height: 45px; background-color:#1E3D58;">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-building-airport">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M3.59 7h8.82a1 1 0 0 1 .902 1.433l-1.44 3a1 1 0 0 1 -.901 .567h-5.942a1 1 0 0 1 -.901 -.567l-1.44 -3a1 1 0 0 1 .901 -1.433" />
                    <path d="M6 7l-.78 -2.342a.5 .5 0 0 1 .473 -.658h4.612a.5 .5 0 0 1 .475 .658l-.78 2.342" />
                    <path d="M8 2v2" />
                    <path d="M6 12v9h4v-9" />
                    <path d="M3 21h18" />
                    <path d="M22 5h-6l-1 -1" />
                    <path d="M18 3l2 2l-2 2" />
                    <path d="M10 17h7a2 2 0 0 1 2 2v2" />
                </svg>
            </div>

            <h2 class="fs-4 fw-bolder mb-0">Pos Meteorologi Bandara Banyuwangi - Create</h2>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="row">
                    <div class="col-12 mb-4">
                        <form id="formCreate" action="{{ route('pos-bandara-bwi.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card border-0 shadow">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col d-flex justify-content-center">
                                            <h2 class="fs-4 fw-bolder mb-3">Inventaris Alat BMKG</h2>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($kategoris as $kategori)
                                    <div class="card-table border-0">
                                        <h4 class="fs-6 fw-bold text-white py-2">{{ $kategori->nama_kategori }}</h4>

                                        <div class="table-responsive">
                                            <table class="table bg-white align-items-center table-flush">

                                                <colgroup>
                                                    <col style="width: 3%;">
                                                    <col style="width: 20%;">
                                                    <col style="width: 10%;">
                                                    <col style="width: 10%">
                                                    <col style="width: 3%;">
                                                    <col style="width: 20%;">
                                                    <col style="width: 3%;">
                                                    <col style="width: 11%;">
                                                    <col style="width: 10%;">
                                                    <col style="width: 10%;">
                                                </colgroup>

                                                <thead class="thead-white">
                                                    <tr>
                                                        <th class="border-bottom">No</th>
                                                        <th class="border-bottom">Nama Alat</th>
                                                        <th class="border-bottom">Merek/Type</th>
                                                        <th class="border-bottom">Penanggung Jawab</th>
                                                        <th class="border-bottom">Jml</th>
                                                        <th class="border-bottom">Kondisi</th>
                                                        <th class="border-bottom">Tahun <br> Pemasangan</th>
                                                        <th class="border-bottom">Kalibrasi Terakhir</th>
                                                        <th class="border-bottom">Keterangan</th>
                                                        <th class="border-bottom">Foto Lampiran</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($kategori->alats as $alat)
                                                        @php
                                                            $cek = $pengecekanTerakhir[$alat->id] ?? null;
                                                        @endphp

                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td class="fw-bolder text-gray-500">{{ $alat->nama_alat }}
                                                            </td>
                                                            <td class="fw-bolder text-gray-500">{{ $alat->merk_tipe }}
                                                            </td>
                                                            <td class="fw-bolder text-gray-500">{{ $alat->jumlah }}
                                                            </td>

                                                            <td class="fw-bolder text-gray-500">
                                                                {{ $user->nama_lengkap ?? '-' }}
                                                            </td>

                                                            {{-- KONDISI --}}
                                                            <td>
                                                                @foreach (['baik', 'rusak ringan', 'rusak berat'] as $kondisi)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            type="checkbox"
                                                                            name="kondisi[{{ $alat->id }}][]"
                                                                            value="{{ $kondisi }}"
                                                                            @if ($dataSudahAda) disabled @endif
                                                                            @if ($cek && in_array($kondisi, $cek->kondisi ?? [])) checked @endif>
                                                                        <label
                                                                            class="form-check-label">{{ ucfirst($kondisi) }}</label>
                                                                    </div>
                                                                @endforeach
                                                            </td>

                                                            {{-- TAHUN PEMASANGAN --}}
                                                            <td>{{ $alat->tahun_pemasangan }}</td>

                                                            {{-- KALIBRASI --}}
                                                            <td>
                                                                <input type="month"
                                                                    name="kalibrasi[{{ $alat->id }}]"
                                                                    class="form-control"
                                                                    value="{{ $cek->kalibrasi_terakhir ?? '' }}"
                                                                    @if ($dataSudahAda) readonly @endif>
                                                            </td>

                                                            <td style="text-transform: capitalize">
                                                                {{ $alat->keterangan }}
                                                            </td>

                                                            {{-- FOTO --}}
                                                            <td>
                                                                <input type="file"
                                                                    name="foto_lampiran[{{ $alat->id }}]"
                                                                    id="input-foto-{{ $alat->id }}"
                                                                    class="d-none">
                                                                <div id="preview-foto-{{ $alat->id }}">
                                                                    @if (isset($cek->foto_lampiran))
                                                                        <img src="{{ asset('storage/' . $cek->foto_lampiran) }}"
                                                                            alt="Foto" width="80"
                                                                            class="rounded shadow-sm mt-1">
                                                                        <p class="text-muted small mb-0">
                                                                            {{ basename($cek->foto_lampiran) }}</p>
                                                                    @endif
                                                                </div>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-outline-primary btn-upload-foto"
                                                                    data-id="{{ $alat->id }}"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalTambahFoto"
                                                                    @if ($dataSudahAda) disabled @endif>
                                                                    {{ $cek && $cek->foto_lampiran ? 'Ganti Foto' : 'Tambah Foto' }}
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        {{-- CATATAN --}}
                                        <div class="col-12 col-sm-6 mt-3">
                                            <h4 class="fs-6 fw-bold text-white mb-2">Catatan</h4>
                                            <textarea name="catatan[{{ $kategori->id }}]" rows="3" class="form-control"
                                                placeholder="Tambahkan catatan apabila diperlukan..." @if ($dataSudahAda) readonly @endif>{{ $catatanTerakhir[$kategori->id]->isi_catatan ?? '' }}</textarea>
                                        </div>

                                    </div>
                                @endforeach

                                <div class="d-flex justify-content-end flex-row mb-2">
                                    <button type="submit" class="btn btn-info" id="btnSimpan"
                                        @if ($dataSudahAda) disabled @endif>
                                        <svg class="icon icon-xs me-1" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M14 4l0 4l-6 0l0 -4" />
                                        </svg>
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal Tambah Foto -->
                <div class="modal fade" id="modalTambahFoto" tabindex="-1" aria-labelledby="modalTambahFotoLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTambahFotoLabel">Upload Foto
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Tutup"></button>
                            </div>
                            <div class="modal-body">
                                <input type="file" id="fileFoto" class="form-control" accept="image/*">
                                <div id="previewModalFoto" class="mt-3 text-center"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger"
                                    data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-sm btn-success"
                                    id="btnSimpanFoto">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-white rounded shadow p-3 mb-3 mt-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <p class="mb-0" style="font-size: 0.9rem;">
                            © 2025 Badan Meteorologi, Klimatologi, dan Geofisika
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Sukses',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonColor: '#0d6efd',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif

    <script>
        let idAlatDipilih = null;

        document.addEventListener('DOMContentLoaded', function() {
            const modalFoto = document.getElementById('modalTambahFoto');
            const inputFileFoto = document.getElementById('fileFoto');
            const previewModal = document.getElementById('previewModalFoto');
            const btnSimpanFoto = document.getElementById('btnSimpanFoto');

            // Klik tombol tambah/ganti foto
            document.querySelectorAll('.btn-upload-foto').forEach(btn => {
                btn.addEventListener('click', function() {
                    idAlatDipilih = this.dataset.id;
                    inputFileFoto.value = '';
                    previewModal.innerHTML = '';
                });
            });

            // Preview di modal
            inputFileFoto.addEventListener('change', function(e) {
                const fileFoto = e.target.files[0];
                if (!fileFoto) return;

                const reader = new FileReader();
                reader.onload = e => {
                    previewModal.innerHTML =
                        `<img src="${e.target.result}" class="img-fluid rounded shadow">`;
                };
                reader.readAsDataURL(fileFoto);
            });

            // Simpan foto
            btnSimpanFoto.addEventListener('click', function() {
                const fileFoto = inputFileFoto.files[0];
                if (!fileFoto) {
                    Swal.fire('Perhatian', 'Silakan pilih foto terlebih dahulu.', 'warning');
                    return;
                }

                const inputHidden = document.getElementById(`input-foto-${idAlatDipilih}`);
                const previewFotoTabel = document.getElementById(`preview-foto-${idAlatDipilih}`);
                const btnFoto = document.querySelector(`.btn-upload-foto[data-id='${idAlatDipilih}']`);

                // masukkan file yang dipilih ke input 
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(fileFoto);
                inputHidden.files = dataTransfer.files;

                // tampilkan preview
                const reader = new FileReader();
                reader.onload = e => {
                    previewFotoTabel.innerHTML = `
                        <img src="${e.target.result}" alt="Foto" width="80" class="rounded shadow-sm mt-1">
                        <p class="text-muted small mb-0">${fileFoto.name}</p>
                    `;
                };
                reader.readAsDataURL(fileFoto);

                // ubah tombol jadi "Ganti Foto"
                btnFoto.textContent = 'Ganti Foto';
                btnFoto.classList.remove('btn-outline-primary');
                btnFoto.classList.add('btn-warning');

                // tutup modal
                bootstrap.Modal.getInstance(modalFoto).hide();
            });
        });
    </script>

    <script>
        document.getElementById('btnSimpan').addEventListener('click', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Data pengecekan alat akan disimpan.",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#0d6efd',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Simpan',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Ubah ini
                    document.getElementById('formCreate').submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Dibatalkan',
                        text: 'Data pengecekan alat tidak jadi disimpan.',
                        icon: 'info',
                        confirmButtonColor: '#0d6efd'
                    });
                }
            });
        });
    </script>


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

    <!-- Dropzone JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js" integrity="sha512-..."
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
