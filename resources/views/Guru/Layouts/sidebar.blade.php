@section('sidebar')
    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li>
                    <a href="/guru" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/guru/biodata" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Biodata Guru</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Pelajaran</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/guru/mengajar">Data Mengajar</a></li>
                        <li><a href="/guru/jadwal">Jadwal Mengajar</a></li>
                        {{-- <li><a href="/waliKelas">Data Wali Kelas</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Hasil Pembelajaran</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="/guru/nilai">Nilai Siswa</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



    <!--**********************************
        Sidebar end
    ***********************************-->
@endsection
