        <div class="sidebar-inner px-4 pt-3">
            <div
                class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        <img src="../../assets/img/team/profile-picture-3.jpg"
                            class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                    </div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, Jane</h2>
                        <a href="../../pages/examples/sign-in.html"
                            class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            Sign Out
                        </a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item" style="width: 100%;">
                    <a href="#" class="nav-link"
                        style="display: flex; align-items: flex-start; text-decoration: none; color: white; background: none;">
                        <img src="{{ asset('volt/assets/img/BMG_2003.png') }}"
                            alt="Logo Instansi"
                            style="width: 30px; height: 30px; margin-right: 8px; flex-shrink: 0;">
                        <span style="font-size: 12px; line-height: 1.2; text-align: center; word-break: break-word; max-width: 150px; white-space: normal;">
                            Stasiun Meteorologi Kelas III Banyuwangi
                        </span>
                    </a>
                </li>
                {{-- <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="https://demo.themesberg.com/volt-pro/pages/kanban.html" target="_blank"
                        class="nav-link d-flex justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                    </path>
                                </svg>
                            </span>
                            <span class="sidebar-text">Kanban</span>
                        </span>
                        <span>
                            <span class="badge badge-sm bg-secondary ms-1 text-gray-800">Pro</span>
                        </span>
                    </a>
                </li> --}}

                @if (auth()->user()->peran=="teknisi")
                <li class="nav-item {{ Request::is('inventaris-alat') ? 'active' : '' }}">
                    <a href="/inventaris-alat" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-folders">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 2a1 1 0 0 1 .707 .293l1.708 1.707h4.585a3 3 0 0 1 2.995 2.824l.005 .176v7a3 3 0 0 1 -3 3h-1v1a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3h1v-1a3 3 0 0 1 3 -3zm-6 6h-1a1 1 0 0 0 -1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1 -1v-1h-7a3 3 0 0 1 -3 -3z" />
                            </svg>
                        </span>
                        <span class="sidebar-text">Inventaris Alat</span>
                    </a>
                </li>
                @endif

                @if (auth()->user()->peran=="teknisi")
                <li class="nav-item {{ Request::is('cetak-laporan') ? 'active' : '' }}">
                    <a href="/cetak-laporan" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-clipboard-text">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M17.997 4.17a3 3 0 0 1 2.003 2.83v12a3 3 0 0 1 -3 3h-10a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 2.003 -2.83a4 4 0 0 0 3.997 3.83h4a4 4 0 0 0 3.98 -3.597zm-2.997 10.83h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0 -2m0 -4h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0 -2m-1 -9a2 2 0 1 1 0 4h-4a2 2 0 1 1 0 -4z" />
                            </svg>
                        </span>
                        <span class="sidebar-text">Cetak Laporan</span>
                    </a>
                </li>
                @endif

                @if (auth()->user()->peran=="teknisi")
                <li class="nav-item {{ Request::is('tambah-alat') ? 'active' : '' }}">
                    <a href="/data-alat" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-database-plus">
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

                @if (auth()->user()->peran=="admin")
                <li class="nav-item {{ Request::is('dashboard-admin') ? 'active' : '' }}">
                    <a href="/dashboard-admin" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 2a4 4 0 100 8 4 4 0 000-8zm-7 14a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                @endif

                @if (auth()->user()->peran=="admin")
                <li class="nav-item {{ Request::is('kelola-akun') ? 'active' : '' }}">
                    <a href="/kelola-akun" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-cog"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h2.5" /><path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M19.001 15.5v1.5" /><path d="M19.001 21v1.5" /><path d="M22.032 17.25l-1.299 .75" /><path d="M17.27 20l-1.3 .75" /><path d="M15.97 17.25l1.3 .75" /><path d="M20.733 20l1.3 .75" /></svg>
                        </span>
                        <span class="sidebar-text">Kelola Akun</span>
                    </a>
                </li>
                @endif

                @if (auth()->user()->peran=="teknisi")
                <li class="nav-item {{ Request::is('profile*') ? 'active' : '' }}">
                <a href="/profile" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zM5 7a1 1 0 011-1h8a1 1 0 011 1v2H5V7zm0 4h10v4H5v-4z" />
                        </svg>
                    </span>
                    <span class="sidebar-text">Profile</span>
                </a>
                </li>
                @endif

                {{-- <li class="nav-item">
                    <a href="https://demo.themesberg.com/volt-pro/pages/calendar.html" target="_blank"
                        class="nav-link d-flex justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="sidebar-text">Calendar</span>
                        </span>
                        <span>
                            <span class="badge badge-sm bg-secondary ms-1 text-gray-800">Pro</span>
                        </span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="https://demo.themesberg.com/volt-pro/pages/map.html" target="_blank"
                        class="nav-link d-flex justify-content-between">
                        <span>
                            <span class="sidebar-icon">
                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="sidebar-text">Map</span>
                        </span>
                        <span>
                            <span class="badge badge-sm bg-secondary ms-1 text-gray-800">Pro</span>
                        </span>
                    </a>
                </li> --}}

                {{-- <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
                <li class="nav-item">
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/"
                        target="_blank" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Documentation <span
                                class="badge badge-sm bg-secondary ms-1 text-gray-800">v1.4</span></span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="https://themesberg.com" target="_blank" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="../../assets/img/themesberg.svg" height="20" width="28"
                                alt="Themesberg Logo">
                        </span>
                        <span class="sidebar-text">Themesberg</span>
                    </a>
                </li> --}}
            </ul>
        </div>