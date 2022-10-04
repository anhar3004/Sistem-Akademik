@section('sidebar')
    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/admin/" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/periode" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Periode</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Kelas</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/admin/ruangan">Data Ruangan</a></li>
                        <li><a href="/admin/kelas">Data Kelas</a></li>
                        {{-- <li><a href="/waliKelas">Data Wali Kelas</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="/admin/siswa" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/guru" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Guru</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Pelajaran</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/admin/pelajaran">Data Pelajaran</a></li>
                        <li><a href="/admin/mengajar">Data Mengajar</a></li>
                        <li><a href="/admin/jadwal">Data Jadwal Pelajaran</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Hasil Pembelajaran</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/admin/absensi">Absensi Siswa</a>
                        </li>
                        <li><a href="/admin/nilai">Nilai Siswa</a>
                        </li>
                        <li><a href="/admin/rapor">Rapor Siswa</a>
                        </li>
                        <li><a href="/admin/perkembangan">Perkembangan Siswa</a>
                        </li>
                        <li><a href="/admin/prestasi">Prestasi Belajar Siswa</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/admin/user" aria-expanded="false">
                        <i class="icon-user menu-icon"></i><span class="nav-text">User</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>



    <!--**********************************
        Sidebar end
    ***********************************-->
@endsection
