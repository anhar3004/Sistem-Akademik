@extends('Admin.layouts.main')

@section('title', 'Data Siswa')

@include('Admin.layouts.header')

@include('Admin.layouts.sidebar')


@section('content')

    <!--**********************************
                                                                                             Content body start
                                                                                    ***********************************-->
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div id="content">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card gradient-4">
                            <div class="card-body ">
                                <h1 class="title-1 text-white">Data Siswa</h1>
                                <br>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar " style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="form-group col-md-12">
                                        <button type="button" class="btn btn-primary" href="" onclick="formTambah()">Tambah
                                            siswa</button>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover text-center" id="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nis</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Detail</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($siswa as $s)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $s->nis }}</td>
                                                    <td>{{ $s->nama_lengkap }}</td>
                                                    <td>{{ $s->class->kelas }}</td>
                                                    <td>{{ $s->tempat_lahir }}</td>
                                                    <td>{{ $s->tanggal_lahir }}</td>
                                                    <td>
                                                        <a href="/siswa/{{ $s->id_siswa }}/detail">
                                                            <span class="badge badge-pill gradient-1">
                                                                <i class="icon-info text-white"></i>
                                                            </span>
                                                        </a>
                                                        <a href="">
                                                            <span class="badge badge-pill gradient-4">
                                                                <i class="icon-printer text-white"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="/siswa/{{ $s->id_siswa }}/ubahSiswa">
                                                            <span class="badge badge-pill gradient-3">
                                                                <i class="icon-pencil text-white"></i>
                                                            </span>
                                                        </a>
                                                        <a href="/siswa/{{ $s->id_siswa }}/delete"
                                                            onclick="return confirm('apakah yakin akan di hapus ?')">
                                                            <span class="badge badge-pill gradient-2">
                                                                <i class="icon-trash text-white"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="detailSiswa">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card ">
                            <div class="card-body ">
                                <h2 class="title-1 text-center">Detail Siswa</h2>
                                <br>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar " style="width: 100%"></div>
                                </div>
                                <br>
                                <div class="row" id="detail">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <dir id="formTambah">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-body ">
                                <h1 class="card-title">Tambah Siswa</h1>
                                <br>
                                <div class="basic-form">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Kelas</label>
                                            <div class="col-lg-6">
                                                <select id="inputState" class="form-control" name="kelas">
                                                    <option value="">
                                                        <-- Silahkan Plih Ruangan Kelas -->
                                                    </option>
                                                    @foreach ($kelas as $k)
                                                        <option value="{{ $k->id_kelas }}">Kelas {{ $k->kelas }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">NIS
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-username" name="nis"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Nama Lengkap
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val_text" name="nama_lengkap"
                                                    placeholder="" onkeyup="Kapital()" onchange="Username()">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Tempat Lahir
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-password"
                                                    name="tempat_lahir" onkeyup="Kapital()" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggal Lahir
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <input type="text" class="form-control mydatepicker" placeholder=""
                                                    name="tanggal_lahir"> <span class="input-group-append"><span
                                                        class="input-group-text"><i
                                                            class="mdi mdi-calendar-check"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Jenis Kelamin
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="input-group">

                                                    <label class="radio-inline mr-3">
                                                        <input type="radio" name="jenis_kelamin" value="Perempuan"
                                                            id="perempuan"> Perempuan
                                                    </label>
                                                    <label class="radio-inline mr-3">
                                                        <input type="radio" name="jenis_kelamin" value="Laki-laki"
                                                            id="laki-laki">
                                                        Laki-laki
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Agama
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password"
                                                    name="agama" onkeyup="Kapital()"  placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Anak ke
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-confirm-password"
                                                    name="anak_ke" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Status
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password"
                                                    name="status" onkeyup="Kapital()"  placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-suggestions" onkeyup="Kapital()" name="alamat" rows="5" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">No Handphone
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-confirm-password"
                                                    name="no_hp" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggal
                                                Diterima
                                            </label>
                                            <div class="col-lg-6 input-group">
                                                <input type="text" class="form-control mydatepicker" placeholder=""
                                                    name="tanggal_diterima"> <span class="input-group-append"><span
                                                        class="input-group-text"><i
                                                            class="mdi mdi-calendar-check"></i></span></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">DI kelas
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-confirm-password"
                                                    name="dikelas" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Nama Ibu
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password"
                                                    name="nama_ibu"  onkeyup="Kapital()" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Pekerjaan Ibu
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password"
                                                    name="pekerjaan_ibu" onkeyup="Kapital()"  placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Nama Ayah
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password"
                                                    name="nama_ayah" onkeyup="Kapital()" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Pekerjaan
                                                Ayah
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password"
                                                    name="pekerjaan_ayah" onkeyup="Kapital()" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Nama Wali
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password"
                                                    name="nama_wali" onkeyup="Kapital()" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Pekerjaan
                                                Wali
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password"
                                                    name="pekerjaan_wali" onkeyup="Kapital()" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat Wali
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" onkeyup="Kapital()" id="val-suggestions" name="alamat_wali" rows="5" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">No Handphone
                                                Wali
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-confirm-password"
                                                    name="no_hp_wali" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Foto
                                            </label>
                                            <div class="col-lg-6">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto"
                                                        value="">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="button" class="btn btn-warning"
                                                    onclick="back()">Back</button>
                                                <button type="button" class="btn btn-primary" id="submit"
                                                    onclick="create()">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </dir>

        </div>
    </div>

    <!--**********************************
                                                                                     Content body end
                                                                                    ***********************************-->

    <script type="text/javascript">
        $(document).ready(function() {
            event.preventDefault();
            $('#formTambah').hide();
            $('#detailSiswa').hide();
            dataTable();
        });

        function Username() {

            var nama_lengkap = $('[name=nama_lengkap]').val();
            var random = Math.floor(Math.random() * 1000);
            var username = nama_lengkap.substring(0, 5) + random;
        }

        function Kapital() {

            var nama_lengkap = $('[name=nama_lengkap]').val();
            var tempat_lahir = $('[name=tempat_lahir]').val();
            var agama = $('[name=agama]').val();
            var status = $('[name=status]').val();
            var alamat = $('[name=alamat]').val();
            var nama_ibu = $('[name=nama_ibu]').val();
            var pekerjaan_ibu = $('[name=pekerjaan_ibu]').val();
            var nama_ayah = $('[name=nama_ayah]').val();
            var pekerjaan_ayah = $('[name=pekerjaan_ayah]').val();
            var nama_wali = $('[name=nama_wali]').val();
            var pekerjaan_wali = $('[name=pekerjaan_wali]').val();
            var alamat_wali = $('[name=alamat_wali]').val();

            $('[name=nama_lengkap]').val(nama_lengkap.split(" ") // Memenggal nama menggunakan spasi
                .map(nama =>
                    nama.charAt(0).toUpperCase() +
                    nama.slice(1)) // Ganti huruf besar kata-kata pertama
                .join(" "));
            $('[name=tempat_lahir]').val(tempat_lahir.replace(/^\w/, (c) => c.toUpperCase()));
            $('[name=agama]').val(agama.replace(/^\w/, (c) => c.toUpperCase()));
            $('[name=status]').val(status.replace(/^\w/, (c) => c.toUpperCase()));
            $('[name=alamat]').val(alamat.replace(/^\w/, (c) => c.toUpperCase()));
            $('[name=nama_ibu]').val(nama_ibu.split(" ") // Memenggal nama menggunakan spasi
            .map(nama =>
                nama.charAt(0).toUpperCase() +
                nama.slice(1)) // Ganti huruf besar kata-kata pertama
            .join(" "));
            $('[name=pekerjaan_ibu]').val(pekerjaan_ibu.replace(/^\w/, (c) => c.toUpperCase()));
            $('[name=nama_ayah]').val(nama_ayah.split(" ") // Memenggal nama menggunakan spasi
            .map(nama =>
                nama.charAt(0).toUpperCase() +
                nama.slice(1)) // Ganti huruf besar kata-kata pertama
            .join(" "));
            $('[name=pekerjaan_ayah]').val(pekerjaan_ayah.replace(/^\w/, (c) => c.toUpperCase()));
            $('[name=nama_wali]').val(nama_wali.split(" ") // Memenggal nama menggunakan spasi
            .map(nama =>
                nama.charAt(0).toUpperCase() +
                nama.slice(1)) // Ganti huruf besar kata-kata pertama
            .join(" "));
            $('[name=pekerjaan_wali]').val(pekerjaan_wali.replace(/^\w/, (c) => c.toUpperCase()));
            $('[name=alamat_wali]').val(alamat_wali.replace(/^\w/, (c) => c.toUpperCase()));
        }

        function dataTable() {
            $('#table').DataTable({

                "ajax": {
                    "url": "http://localhost:8000/admin/siswa/dataTable",
                    "dataSrc": ""
                },
                "columns": [{
                        data: "id_siswa",
                        sortable: false,
                        order: [
                            ["id_siswa", 'asc']
                        ],
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: "nis",
                        {{-- order: [
                            [null, 'asc']
                        ] --}}
                    },
                    {
                        data: "nama_lengkap"
                    },
                    {
                        data: "kelas"
                    },
                    {
                        data: "tempat_lahir"
                    },
                    {
                        data: "tanggal_lahir"
                    },
                    {
                        data: "id_siswa",
                        mRender: function(data) {
                            return `<div>
                                     <a href="" data-toggle="modal" onclick="detail(${data})">
                                         <span class="badge badge-pill gradient-1">
                                         <i class="icon-eye text-white"></i>
                                         </span>
                                     </a>
                                     <a href="" data-toggle="modal" onclick="print(${data})">
                                        <span class="badge badge-pill gradient-4">
                                            <i class="icon-printer text-white"></i>
                                        </span>
                                    </a>
                                  </div>`;
                        }
                    },
                    {
                        data: "id_siswa",
                        mRender: function(data) {
                            return `<div>
                                    <a href="" data-toggle="modal" onclick="formEdit(${data})">
                                        <span class="badge badge-pill gradient-3">
                                        <i class="icon-pencil text-white"></i>
                                        </span>
                                    </a>
                                    <a onclick="hapus(${data})">
                                        <span class="badge badge-pill gradient-2">
                                        <i class="icon-trash text-white"></i>
                                        </span>
                                    </a>
                                 </div>`;
                        }
                    }
                ]
            })
        }

        function formTambah() {
            $('#content').hide();
            $('#formTambah').show();
            $('#detailSiswa').hide();
            $('#formTambah').find('.card-title').contents().last()[0].textContent = 'Tambah Data Siswa';
            $('#formTambah').find('#submit').attr('onclick', 'create()').contents().last()[0].textContent = 'Submit';
        }

        function back() {
            $('[name=kelas]').val("");
            $('[name=nis]').val("");
            $('[name=nama_lengkap]').val("");
            $('[name=tempat_lahir]').val("");
            $('[name=tanggal_lahir]').val("");
            $('[name=jens_kelamin]').val("");
            $('[name=agama]').val("");
            $('[name=anak_ke]').val("");
            $('[name=status]').val("");
            $('[name=alamat]').val("");
            $('[name=no_hp]').val("");
            $('[name=tanggal_diterima]').val("");
            $('[name=dikelas]').val("");
            $('[name=nama_ibu]').val("");
            $('[name=pekerjaan_ibu]').val("");
            $('[name=nama_ayah]').val("");
            $('[name=pekerjaan_ayah]').val("");
            $('[name=nama_wali]').val("");
            $('[name=pekerjaan_wali]').val("");
            $('[name=alamat_wali]').val("");
            $('[name=no_hp_wali]').val("");

            $('#formTambah').hide();
            $('#content').show();
        }

        function create() {
            var kelas = $('[name=kelas]').val();
            var nis = $('[name=nis]').val();
            var nama_lengkap = $('[name=nama_lengkap]').val();
            var tempat_lahir = $('[name=tempat_lahir]').val();
            var tanggal_lahir = $('[name=tanggal_lahir]').val();
            var jenis_kelamin = $('[name=jenis_kelamin]:checked').val();
            var agama = $('[name=agama]').val();
            var anak_ke = $('[name=anak_ke]').val();
            var status = $('[name=status]').val();
            var alamat = $('[name=alamat]').val();
            var no_hp = $('[name=no_hp]').val();
            var tanggal_diterima = $('[name=tanggal_diterima]').val();
            var dikelas = $('[name=dikelas]').val();
            var nama_ibu = $('[name=nama_ibu]').val();
            var pekerjaan_ibu = $('[name=pekerjaan_ibu]').val();
            var nama_ayah = $('[name=nama_ayah]').val();
            var pekerjaan_ayah = $('[name=pekerjaan_ayah]').val();
            var nama_wali = $('[name=nama_wali]').val();
            var pekerjaan_wali = $('[name=pekerjaan_wali]').val();
            var alamat_wali = $('[name=alamat_wali]').val();
            var no_hp_wali = $('[name=no_hp_wali]').val();
            var foto = $('[name=foto]').val();
            var username = nama_lengkap.split(' ', 1)+ Math.floor(Math.random() * 1000);

            $.ajax({
                url: 'http://localhost:8000/admin/siswa/create',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    kelas: kelas,
                    nis: nis,
                    nama_lengkap: nama_lengkap,
                    tempat_lahir: tempat_lahir,
                    tanggal_lahir: tanggal_lahir,
                    jenis_kelamin: jenis_kelamin,
                    agama: agama,
                    anak_ke: anak_ke,
                    status: status,
                    alamat: alamat,
                    no_hp: no_hp,
                    tanggal_diterima: tanggal_diterima,
                    dikelas: dikelas,
                    nama_ibu: nama_ibu,
                    pekerjaan_ibu: pekerjaan_ibu,
                    nama_ayah: nama_ayah,
                    pekerjaan_ayah: pekerjaan_ayah,
                    nama_wali: nama_wali,
                    pekerjaan_wali: pekerjaan_wali,
                    alamat_wali: alamat_wali,
                    no_hp_wali: no_hp_wali,
                    username: username,
                    foto: foto,
                },
                success: function(data) {
                    toastr.success("Data Berhasil DI Tambahkan...!!!", "Sucesss", {
                        positionClass: "toast-bottom-right",
                        timeOut: 5e3,
                        closeButton: !0,
                        debug: !1,
                        newestOnTop: !0,
                        progressBar: !0,
                        preventDuplicates: !0,
                        onclick: null,
                        showDuration: "300",
                        hideDuration: "1000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                        tapToDismiss: !1,
                    });
                    back();
                    $('#table').DataTable().destroy();
                    dataTable();
                },
                error: function(request, status, error) {
                    toastr.error("Data Tidak Berhasil Di Tambahkan", "Error", {
                        positionClass: "toast-bottom-right",
                        timeOut: 5e3,
                        closeButton: !0,
                        debug: !1,
                        newestOnTop: !0,
                        progressBar: !0,
                        preventDuplicates: !0,
                        onclick: null,
                        showDuration: "300",
                        hideDuration: "1000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                        tapToDismiss: !1,
                    });
                }
            });
        }

        function formEdit(id) {

            $.ajax({
                url: 'http://localhost:8000/admin/siswa/' + id + '/edit',
                type: 'GET',

                success: function(data) {
                    formTambah();
                    $('#formTambah').find('.card-title').contents().last()[0].textContent = 'Ubah Data Siswa';
                    $('#formTambah').find('#submit').attr('onclick', 'update(id_siswa)').contents().last()[0]
                        .textContent = 'Update';

                    $.each(data, function(key, value) {
                        id_siswa = data[key].id_siswa;
                        kelas = data[key].kelas;
                        nis = data[key].nis;
                        nama_lengkap = data[key].nama_lengkap;
                        tempat_lahir = data[key].tempat_lahir;
                        tanggal_lahir = data[key].tanggal_lahir;
                        jenis_kelamin = data[key].jenis_kelamin;
                        agama = data[key].agama;
                        anak_ke = data[key].anak_ke;
                        status = data[key].status;
                        alamat = data[key].alamat;
                        no_hp = data[key].no_hp;
                        tanggal_diterima = data[key].tanggal_diterima;
                        dikelas = data[key].dikelas;
                        nama_ibu = data[key].nama_ibu;
                        pekerjaan_ibu = data[key].pekerjaan_ibu;
                        nama_ayah = data[key].nama_ayah;
                        pekerjaan_ayah = data[key].pekerjaan_ayah;
                        nama_wali = data[key].nama_wali;
                        pekerjaan_wali = data[key].pekerjaan_wali;
                        alamat_wali = data[key].alamat_wali;
                        no_hp_wali = data[key].no_hp_wali;

                        $('[name=kelas]').val(kelas);
                        $('[name=nis]').val(nis);
                        $('[name=nama_lengkap]').val(nama_lengkap);
                        $('[name=tempat_lahir]').val(tempat_lahir);
                        $('[name=tanggal_lahir]').val(tanggal_lahir);

                        if (jenis_kelamin == "Laki-laki") {
                            $('#laki-laki').attr('checked', 'true').val(jenis_kelamin);

                        } else {
                            $('#perempuan').attr('checked', 'true').val(jenis_kelamin);
                        }

                        $('[name=agama]').val(agama);
                        $('[name=anak_ke]').val(anak_ke);
                        $('[name=status]').val(status);
                        $('[name=alamat]').val(alamat);
                        $('[name=no_hp]').val(no_hp);
                        $('[name=tanggal_diterima]').val(tanggal_diterima);
                        $('[name=dikelas]').val(dikelas);
                        $('[name=nama_ibu]').val(nama_ibu);
                        $('[name=pekerjaan_ibu]').val(pekerjaan_ibu);
                        $('[name=nama_ayah]').val(nama_ayah);
                        $('[name=pekerjaan_ayah]').val(pekerjaan_ayah);
                        $('[name=nama_wali]').val(nama_wali);
                        $('[name=pekerjaan_wali]').val(pekerjaan_wali);
                        $('[name=alamat_wali]').val(alamat_wali);
                        $('[name=no_hp_wali]').val(no_hp_wali);
                    });
                }
            });
        }

        function update(id) {
            var kelas = $('[name=kelas]').val();
            var nis = $('[name=nis]').val();
            var nama_lengkap = $('[name=nama_lengkap]').val();
            var tempat_lahir = $('[name=tempat_lahir]').val();
            var tanggal_lahir = $('[name=tanggal_lahir]').val();
            var jenis_kelamin = $('[name=jenis_kelamin]:checked').val();
            var agama = $('[name=agama]').val();
            var anak_ke = $('[name=anak_ke]').val();
            var status = $('[name=status]').val();
            var alamat = $('[name=alamat]').val();
            var no_hp = $('[name=no_hp]').val();
            var tanggal_diterima = $('[name=tanggal_diterima]').val();
            var dikelas = $('[name=dikelas]').val();
            var nama_ibu = $('[name=nama_ibu]').val();
            var pekerjaan_ibu = $('[name=pekerjaan_ibu]').val();
            var nama_ayah = $('[name=nama_ayah]').val();
            var pekerjaan_ayah = $('[name=pekerjaan_ayah]').val();
            var nama_wali = $('[name=nama_wali]').val();
            var pekerjaan_wali = $('[name=pekerjaan_wali]').val();
            var alamat_wali = $('[name=alamat_wali]').val();
            var no_hp_wali = $('[name=no_hp_wali]').val();

            $.ajax({
                url: 'http://localhost:8000/admin/siswa/' + id + '/update',
                type: 'put',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    kelas: kelas,
                    nis: nis,
                    nama_lengkap: nama_lengkap,
                    tempat_lahir: tempat_lahir,
                    tanggal_lahir: tanggal_lahir,
                    jenis_kelamin: jenis_kelamin,
                    agama: agama,
                    anak_ke: anak_ke,
                    status: status,
                    alamat: alamat,
                    no_hp: no_hp,
                    tanggal_diterima: tanggal_diterima,
                    dikelas: dikelas,
                    nama_ibu: nama_ibu,
                    pekerjaan_ibu: pekerjaan_ibu,
                    nama_ayah: nama_ayah,
                    pekerjaan_ayah: pekerjaan_ayah,
                    nama_wali: nama_wali,
                    pekerjaan_wali: pekerjaan_wali,
                    alamat_wali: alamat_wali,
                    no_hp_wali: no_hp_wali,

                },
                success: function(data) {

                    toastr.success("Data Berhasil DI Ubah...!!!", "Sucesss", {
                        positionClass: "toast-bottom-right",
                        timeOut: 5e3,
                        closeButton: !0,
                        debug: !1,
                        newestOnTop: !0,
                        progressBar: !0,
                        preventDuplicates: !0,
                        onclick: null,
                        showDuration: "300",
                        hideDuration: "1000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                        tapToDismiss: !1,
                    });
                    back();
                    $('#table').DataTable().destroy();

                    dataTable();
                },
                error: function(request, status, error) {

                    toastr.error("Data Tidak Berhasil Di Ubah", "Error", {
                        positionClass: "toast-bottom-right",
                        timeOut: 5e3,
                        closeButton: !0,
                        debug: !1,
                        newestOnTop: !0,
                        progressBar: !0,
                        preventDuplicates: !0,
                        onclick: null,
                        showDuration: "300",
                        hideDuration: "1000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                        tapToDismiss: !1,
                    });
                }
            });
        }

        function hapus(id) {
            Swal.fire({
                title: 'Apakah kamu yakin ingin menghapus data ini?',
                text: "Data Yang telah dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'http://localhost:8000/admin/siswa/' + id + '/delete',
                        type: 'GET',
                        success: function(data) {
                            $('#table').DataTable().destroy();
                            dataTable();
                            Swal.fire(
                                'Delete!',
                                'Data telah berhasil dihapus',
                                'success'
                            )

                        }
                    })
                }
            })

        }

        function detail(id) {

            $.ajax({
                url: 'http://localhost:8000/admin/siswa/' + id + '/detail',
                type: 'GET',
                success: function(data) {
                    $('#detailSiswa').show();
                    $('#detail').empty();

                    $.each(data, function(key, value) {
                        id_siswa = data[key].id_siswa;
                        kelas = data[key].kelas;
                        nis = data[key].nis;
                        nama_lengkap = data[key].nama_lengkap;
                        tempat_lahir = data[key].tempat_lahir;
                        tanggal_lahir = data[key].tanggal_lahir;
                        jenis_kelamin = data[key].jenis_kelamin;
                        agama = data[key].agama;
                        anak_ke = data[key].anak_ke;
                        status = data[key].status;
                        alamat = data[key].alamat;
                        no_hp = data[key].no_hp;
                        tanggal_diterima = data[key].tanggal_diterima;
                        dikelas = data[key].dikelas;
                        nama_ibu = data[key].nama_ibu;
                        pekerjaan_ibu = data[key].pekerjaan_ibu;
                        nama_ayah = data[key].nama_ayah;
                        pekerjaan_ayah = data[key].pekerjaan_ayah;
                        nama_wali = data[key].nama_wali;
                        pekerjaan_wali = data[key].pekerjaan_wali;
                        alamat_wali = data[key].alamat_wali;
                        no_hp_wali = data[key].no_hp_wali;

                        if (nama_wali == null) {
                            nama_wali = "-";
                        }
                        if (pekerjaan_wali == null) {
                            pekerjaan_wali = "-";
                        }
                        if (alamat_wali == null) {
                            alamat_wali = "-";
                        }
                        if (no_hp_wali == null) {
                            no_hp_wali = "-";
                        };

                        $('#detail').append(`<div class=" col-md-2 Text-center">
                        </div>
                        <div class=" col-md-2 Text-center">
                            <h5 class="title-1 ">Nis</h5>
                        </div>
                        <h5 class="title-1 ">:</h5>
                        <div class="col-md-3 Text-center">
                            <h5 class="title-1 ">${nis}</h5>
                        </div>
                        <div class="col-md-2 Text-center">
                            <h5 class="title-1 ">Tanggal Diterima</h5>
                        </div>
                        <h5 class="title-1 ">:</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${tanggal_diterima}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Nama</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 ">${nama_lengkap}</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Di Kelas</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${dikelas}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Kelas</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 ">Kelas ${kelas}</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Nama Ayah</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${nama_ayah}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Tempat Lahir</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 ">${tempat_lahir}</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Pekerjaan Ayah</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${pekerjaan_ayah}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Tanggal Lahir</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 ">${tanggal_lahir}</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Nama Ibu</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${nama_ibu}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Jenis Kelamin</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 ">${jenis_kelamin}</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Pekerjaan Ibu</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${pekerjaan_ibu}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Agama</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 ">${agama}</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1">Nama Wali</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${nama_wali}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Anak Ke</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 ">${anak_ke}</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Pekerjaan Wali</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${pekerjaan_wali}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Status</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 ">${status}</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Alamat Wali</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${alamat_wali}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">No Handphone</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 ">${no_hp}</h5>
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">No Handphone Wali</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${no_hp_wali}</h5>
                        </div>
                        <div class=" col-md-2 Text-center">
                        </div>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">Alamat</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-3 ">
                            <h5 class="title-1 "> ${alamat}</h5>
                        </div>`);

                    });
                }
            })
        }
    </script>
@endsection
