@extends('Admin.layouts.main')

@section('title', 'Dashboard Admin')

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
                                <h1 class="title-1 text-white">Data Guru</h1>
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
                                        <button type="button" class="btn btn-primary" href=""
                                            onclick="formTambah()">Tambah
                                            Guru</button>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover text-center"
                                        id="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIP</th>
                                                <th>Nama Lengkap</th>
                                                <th>No Hp</th>
                                                <th>Email</th>
                                                <th>Detail</th>
                                                <th>Cetak</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="formTambah">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-body ">
                            <h1 class="card-title">Tambah Siswa</h1>
                            <div class="basic-form">
                                <form action="/guru/tambah" method="post" class="form-horizontal" id="form">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">NIP
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-username" name="nip"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-email">Nama Lengkap
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val_text" name="nama_lengkap"
                                                placeholder="" onkeyup="Kapitalis()" onchange="Username()">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-email">Nama Belakang
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val_text" name="nama_belakang"
                                                placeholder="" onkeyup="Kapitalis()" on>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-email">Username
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-email" name="username"
                                                placeholder="" readonly>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-password">Tempat Lahir
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-password" name="tempat_lahir"
                                                placeholder="" onkeyup="Kapitalis()">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggal Lahir
                                        </label>
                                        <div class="col-lg-6 input-group">
                                            <input type="text" class="form-control mydatepicker" placeholder=""
                                                name="tanggal_lahir">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-calendar-check"></i>
                                                </span>
                                            </span>
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
                                        <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="val-suggestions" name="alamat" rows="5" placeholder="" onkeyup="Kapitalis()"></textarea>
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
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Email
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" id="val-confirm-password"
                                                name="email" placeholder="" onkeyup="Kapitalis()">
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
                                            <button type="button" class="btn btn-warning" onclick="back()">Back</button>
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
            <div id="detailGuru">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card ">
                            <div class="card-body ">
                                <h2 class="title-1 text-center">Detail Guru</h2>
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
        </div>
    </div>

    <!--**********************************
                                                     Content body end
                                                    ***********************************-->
    <script type="text/javascript">
        $(document).ready(function() {
            event.preventDefault();
            $('#formTambah').hide();
            $('#detailGuru').hide();
            dataTable();
        });

        function Username() {

            var nama_lengkap = $('[name=nama_lengkap]').val();
            var random = Math.floor(Math.random() * 1000);
            var username = nama_lengkap.substring(0, 5) + random;


        }

        function Kapitalis() {

            var nama_lengkap = $('[name=nama_lengkap]').val();
            var tempat_lahir = $('[name=tempat_lahir]').val();
            var alamat = $('[name=alamat]').val();
            var email = $('[name=email]').val();

            $('[name=nama_lengkap]').val(nama_lengkap.split(" ") // Memenggal nama menggunakan spasi
                .map(nama =>
                    nama.charAt(0).toUpperCase() +
                    nama.slice(1)) // Ganti huruf besar kata-kata pertama
                .join(" "));
            $('[name=tempat_lahir]').val(tempat_lahir.replace(/^\w/, (c) => c.toUpperCase()));
            $('[name=alamat]').val(alamat.replace(/^\w/, (c) => c.toUpperCase()));
            $('[name=email]').val(email.replace(/^\w/, (c) => c.toUpperCase()));



        }

        function dataTable() {
            $('#table').DataTable({

                "ajax": {
                    "url": "http://localhost:8000/guru/dataTable",
                    "dataSrc": ""
                },
                "columns": [{
                        data: "id_guru",
                        sortable: false,
                        order: [
                            ["id_siswa", 'asc']
                        ],
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: "nip",
                        {{-- order: [
                                                [null, 'asc']
                                            ] --}}
                    },
                    {
                        data: "nama_lengkap"
                    },
                    {
                        data: "no_hp"
                    },
                    {
                        data: "email"
                    },
                    {
                        data: "id_guru",
                        mRender: function(data) {
                            return `<div>
                                                         <a href="" data-toggle="modal" onclick="detail(${data})">
                                                             <span class="badge badge-pill gradient-1">
                                                             <i class="icon-eye text-white"></i>
                                                             </span>
                                                         </a>
                                                      </div>`;
                        }
                    },
                    {
                        data: "id_guru",
                        mRender: function(data) {
                            return `<div>
                                                         <a href="" data-toggle="modal" onclick="print(${data})">
                                                            <span class="badge badge-pill gradient-4">
                                                                <i class="icon-printer text-white"></i>
                                                            </span>
                                                        </a>
                                                      </div>`;
                        }
                    },
                    {
                        data: "id_guru",
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
            $('#detailGuru').hide();
            $('#formTambah').find('.card-title').contents().last()[0].textContent = 'Tambah Data Guru';
            $('#formTambah').find('#submit').attr('onclick', 'create()').contents().last()[0].textContent = 'Submit';
        }

        function back() {
            $('[name=nip]').val("");
            $('[name=nama_depan]').val("");
            $('[name=nama_belakang]').val("");
            $('[name=username]').val("");
            $('[name=tempat_lahir]').val("");
            $('[name=tanggal_lahir]').val("");
            $('[name=jens_kelamin]').val("");
            $('[name=alamat]').val("");
            $('[name=no_hp]').val("");
            $('[name=email]').val("");
            $('[name=foto]').val("");

            $('#formTambah').hide();
            $('#content').show();
        }


        function create() {

            var nip = $('[name=nip]').val();
            var nama_lengkap = $('[name=nama_lengkap]').val();

            var username = nama_lengkap.split(' ', 1)+ Math.floor(Math.random() * 1000);
            var tempat_lahir = $('[name=tempat_lahir]').val();
            var tanggal_lahir = $('[name=tanggal_lahir]').val();
            var jenis_kelamin = $('[name=jenis_kelamin]:checked').val();
            var alamat = $('[name=alamat]').val();
            var no_hp = $('[name=no_hp]').val();
            var email = $('[name=email]').val();
            var foto = $('[name=foto]').val();
            $.ajax({
                url: 'http://localhost:8000/guru/create',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {

                    nip: nip,
                    nama_lengkap: nama_lengkap,
                    username: username,
                    tempat_lahir: tempat_lahir,
                    tanggal_lahir: tanggal_lahir,
                    jenis_kelamin: jenis_kelamin,
                    alamat: alamat,
                    no_hp: no_hp,
                    email: email,
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
                url: 'http://localhost:8000/guru/' + id + '/edit',
                type: 'GET',

                success: function(data) {
                    formTambah();
                    $('#formTambah').find('.card-title').contents().last()[0].textContent = 'Ubah Data Guru';
                    $('#formTambah').find('#submit').attr('onclick', 'update(id_guru)').contents().last()[0]
                        .textContent = 'Update';

                    $.each(data, function(key, value) {
                        id_guru = data[key].id_guru;
                        nip = data[key].nip;
                        nama_lengkap = data[key].nama_lengkap;
                        username = data[key].username;
                        tempat_lahir = data[key].tempat_lahir;
                        tanggal_lahir = data[key].tanggal_lahir;
                        jenis_kelamin = data[key].jenis_kelamin;
                        alamat = data[key].alamat;
                        no_hp = data[key].no_hp;
                        email = data[key].email;
                        foto = data[key].foto;

                        $('[name=nip]').val(nip);
                        $('[name=nama_lengkap]').val(nama_lengkap);
                        $('[name=username]').val(username);
                        $('[name=tempat_lahir]').val(tempat_lahir);
                        $('[name=tanggal_lahir]').val(tanggal_lahir);

                        if (jenis_kelamin == "Laki-laki") {
                            $('#laki-laki').attr('checked', 'true').val(jenis_kelamin);

                        } else {
                            $('#perempuan').attr('checked', 'true').val(jenis_kelamin);
                        }

                        $('[name=alamat]').val(alamat);
                        $('[name=no_hp]').val(no_hp);
                        $('[name=email]').val(email);
                        $('[name=foto]').val(foto);

                    });
                }
            });
        }

        function update(id) {
            var nip = $('[name=nip]').val();
            var nama_lengkap = $('[name=nama_lengkap]').val();
            var tempat_lahir = $('[name=tempat_lahir]').val();
            var tanggal_lahir = $('[name=tanggal_lahir]').val();
            var jenis_kelamin = $('[name=jenis_kelamin]:checked').val();
            var alamat = $('[name=alamat]').val();
            var no_hp = $('[name=no_hp]').val();
            var email = $('[name=email]').val();
            var foto = $('[name=foto]').val();


            $.ajax({
                url: 'http://localhost:8000/guru/' + id + '/update',
                type: 'put',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    nip: nip,
                    nama_lengkap: nama_lengkap,
                    tempat_lahir: tempat_lahir,
                    tanggal_lahir: tanggal_lahir,
                    jenis_kelamin: jenis_kelamin,
                    alamat: alamat,
                    no_hp: no_hp,
                    email: email,
                    foto: foto,
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
                        url: 'http://localhost:8000/guru/' + id + '/delete',
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
                url: 'http://localhost:8000/guru/' + id + '/detail',
                type: 'GET',
                success: function(data) {
                    $('#detailGuru').show();
                    $('#detail').empty();

                    $.each(data, function(key, value) {
                        id_guru = data[key].id_guru;
                        nip = data[key].nip;
                        nama_lengkap = data[key].nama_lengkap;
                        tempat_lahir = data[key].tempat_lahir;
                        tanggal_lahir = data[key].tanggal_lahir;
                        jenis_kelamin = data[key].jenis_kelamin;
                        alamat = data[key].alamat;
                        no_hp = data[key].no_hp;
                        email = data[key].email;
                        foto = data[key].foto;

                        {{-- if (foto == null) {
                            foto = "-";
                        } --}}

                        $('#detail').append(` <div class=" col-md-2 Text-center">
                        </div>
                        <div class=" col-md-2 Text-center">
                            <h5 class="title-1 ">NiP</h5>
                        </div>
                        <h5 class="title-1 ">:</h5>
                        <div class="col-md-3 Text-center">
                            <h5 class="title-1 ">${nip} </h5>
                        </div>
                        <div class="col-md-2 Text-center">
                            <h5 class="title-1 ">Jenis Kelamin</h5>
                        </div>
                        <h5 class="title-1 ">:</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${jenis_kelamin} </h5>
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
                            <h5 class="title-1 ">No Handphone</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${no_hp}</h5>
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
                            <h5 class="title-1 ">Email</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${email}</h5>
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
                            <h5 class="title-1 ">Alamat</h5>
                        </div>
                        <h5 class="title-1 "> :</h5>
                        <div class="col-md-2 ">
                            <h5 class="title-1 ">${alamat}</h5>
                        </div>`);

                    });
                }
            })
        }
    </script>
@endsection
