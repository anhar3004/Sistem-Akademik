@section('sidebar')
    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/wali_kelas" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/wali_kelas/biodata" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Biodata Guru</span>
                    </a>
                </li>
                <li>
                    <a href="/wali_kelas/siswa" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Data Siswa</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Pelajaran</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/wali_kelas/mengajar">Data Mengajar</a></li>
                        <li><a href="/wali_kelas/jadwal">Jadwal Mengajar</a></li>
                        {{-- <li><a href="/waliKelas">Data Wali Kelas</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Hasil Pembelajaran</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/wali_kelas/nilai">Data Nilai Siswa</a></li>
                        <li><a href="/wali_kelas/rapor">Data Rapor Siswa</a></li>
                        <li><a href="/wali_kelas/perkembangan">Data Perkembangan Siswa</a></li>
                        <li><a href="/wali_kelas/absensi">Data Absensi Siswa</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/wali_kelas/prestasi" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Prestasi Siswa</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>



    <!--**********************************
        Sidebar end
    ***********************************-->
@endsection
