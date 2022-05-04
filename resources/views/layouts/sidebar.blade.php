@section('sidebar')
<!--**********************************
    Sidebar start
***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Periode</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Kelas</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Data Ruangan</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Data Kelas</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Data Wali Kelas</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Siswa</span>
                </a>
            </li>
            <li>
                <a href="widgets.html" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Guru</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Pelajaran</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Data Pelajaran</a></li>
                </ul>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Data Mengajar</a>
                    </li>
                </ul>
                <ul aria-expanded="false">
                    <li><a href="./index.html">Data Wali Kelas</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Hasil Pembelajaran</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./layout-blank.html">Nilai Siswa</a>
                    </li>
                    <li><a href="./layout-two-column.html">Rapor Siswa</a>
                    </li>
                    <li><a href="./layout-compact-nav.html">Perkembangan Siswa</a>
                    </li>
                    <li><a href="./layout-vertical.html">Prestasi Belajar Siswa</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="widgets.html" aria-expanded="false">
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
