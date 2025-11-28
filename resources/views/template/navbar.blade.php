<div class="container-fluid px-0">
    <div class="d-flex justify-content-end align-items-center w-100" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center mb-0">

            <!-- Profil User -->
            <li class="nav-item d-flex align-items-center list-unstyled me-3">
                @php
                $user = auth()->user();
                $fotoPath = 'foto_profil/default-profile.jpg';
                if ($user && $user->foto_profil) {
                    if (Storage::disk('public')->exists($user->foto_profil)) {
                        $fotoPath = $user->foto_profil;
                    }
                }
                @endphp

                <img class="avatar rounded-circle"
                    alt="Foto Profil"
                    src="{{ asset('storage/' . $fotoPath) }}" alt="Foto Profil"
                    style="width:45px; height:45px; object-fit:cover;">

                <span class="ms-2 mb-0 font-small fw-bold text-gray-900">
                    {{ $user->nama_lengkap ?? 'Pengguna' }}
                </span>
            </li>

            <!-- Tombol Logout -->
            <li class="nav-item list-unstyled">
                <form id="logoutForm" action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button type="button"
                        class="btn btn-link d-flex align-items-center text-danger text-decoration-none p-0"
                        onclick="confirmLogout(event)">
                        <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            style="width:20px; height:20px;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>

<script>
    function confirmLogout(event) {
        event.preventDefault();
        if (confirm('Apakah Anda yakin ingin keluar dari aplikasi?')) {
            document.getElementById('logoutForm').submit();
        }
    }
</script>