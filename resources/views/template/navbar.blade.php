<div class="container-fluid px-0">
  <div class="d-flex justify-content-end align-items-center w-100" id="navbarSupportedContent">
    <ul class="navbar-nav d-flex align-items-center mb-0">

            <!-- Profil User -->
            <li class="nav-item d-flex align-items-center list-unstyled me-3">
                @php
                $user = auth()->user();
                $fotoPath = 'foto_profil/default-profil.jpg';
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
    </ul>
  </div>
</div>
