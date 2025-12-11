<div class="sidebar-inner px-4 pt-3">

    <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item mb-3">
            <div class="d-flex align-items-center">
                <span class="sidebar-icon">
                    <img src="{{ asset('volt/assets/img/BMG_2003.png') }}" class="rounded-circle fw-bolder"
                        style="width:40px; height:40px; object-fit:cover;" alt="Volt Logo">
                </span>

                <span class="m-2 ms-2 sidebar-text">Stamet Banyuwangi</span>

                <div class="collapse-close d-md-none d-flex ms-auto">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                            style="width:20px; height:20px;">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0
                        111.414 1.414L11.414 10l4.293 4.293a1 1 0
                        01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0
                        01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </li>


        @if (auth()->user()->peran == 'teknisi')
            <li class="nav-item {{ Request::is('inventaris-alat') ? 'active' : '' }}">
                <a href="/inventaris-alat" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="currentColor"
                            class="icon icon-tabler icons-tabler-filled icon-tabler-folders">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M12 2a1 1 0 0 1 .707 .293l1.708 1.707h4.585a3 3 0 0 1 2.995 2.824l.005 .176v7a3 3 0 0 1 -3 3h-1v1a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3h1v-1a3 3 0 0 1 3 -3zm-6 6h-1a1 1 0 0 0 -1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1 -1v-1h-7a3 3 0 0 1 -3 -3z" />
                        </svg>
                    </span>
                    <span class="sidebar-text">Inventaris Alat</span>
                </a>
            </li>
        @endif

        @if (auth()->user()->peran == 'teknisi')
            <li class="nav-item {{ Request::is('laporan-alat') ? 'active' : '' }}">
                <a href="/laporan-alat" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-text">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            <path d="M9 12h6" />
                            <path d="M9 16h6" />
                        </svg>
                    </span>
                    <span class="sidebar-text">Cetak Laporan</span>
                </a>
            </li>
        @endif

        @if (auth()->user()->peran == 'teknisi')
            <li class="nav-item {{ Request::is('data-alat') ? 'active' : '' }}">
                <a href="/data-alat" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-database-plus">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3" />
                            <path d="M4 6v6c0 1.657 3.582 3 8 3c1.075 0 2.1 -.08 3.037 -.224" />
                            <path d="M20 12v-6" />
                            <path d="M4 12v6c0 1.657 3.582 3 8 3c.166 0 .331 -.002 .495 -.006" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                        </svg>
                    </span>
                    <span class="sidebar-text">Tambah Alat</span>
                </a>
            </li>
        @endif

        @if (auth()->user()->peran == 'admin')
            <li class="nav-item {{ Request::is('dashboard-admin') ? 'active' : '' }}">
                <a href="/dashboard-admin" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-dashboard">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M13.45 11.55l2.05 -2.05" />
                            <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                        </svg>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
        @endif

        @if (auth()->user()->peran == 'admin')
            <li class="nav-item {{ Request::is('kelola-akun') ? 'active' : '' }}">
                <a href="/kelola-akun" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-user-cog">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h2.5" />
                            <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M19.001 15.5v1.5" />
                            <path d="M19.001 21v1.5" />
                            <path d="M22.032 17.25l-1.299 .75" />
                            <path d="M17.27 20l-1.3 .75" />
                            <path d="M15.97 17.25l1.3 .75" />
                            <path d="M20.733 20l1.3 .75" />
                        </svg>
                    </span>
                    <span class="sidebar-text">Kelola Akun</span>
                </a>
            </li>
        @endif

        @if (auth()->user()->peran == 'teknisi')
            <li class="nav-item {{ Request::is('profile*') ? 'active' : '' }}">
                <a href="/profile" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                    </span>
                    <span class="sidebar-text">Profil</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a href="{{ route('auth.logout') }}" class="nav-link" id="btnLogout">
                <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M9 12h12l-3 -3" />
                        <path d="M18 15l3 -3" />
                    </svg>
                </span>
                <span class="sidebar-text">Logout</span>
            </a>
        </li>

    </ul>
</div>

<script>
    document.getElementById('btnLogout').addEventListener('click', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Apakah kamu yakin ingin logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#0d6efd',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('auth.logout') }}";
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: 'Dibatalkan',
                    text: 'Logout dibatalkan.',
                    icon: 'info',
                    confirmButtonColor: '#0d6efd'
                });
            }
        });
    });
</script>
