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
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card gradient-4">
                        <div class="card-body ">
                            <h1 class="title-1 text-white">Data Pelajaran</h1>
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
                                    <button type="button" class="btn btn-primary" onclick="formTambah()">Tambah
                                        Pelajaran</button>
                                </div>
                                <table class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Pelajaran</th>
                                            <th>Nama Pelajaran</th>
                                            <th>Muatan</th>
                                            <th>KKM</th>
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
        <div class="col-lg-12">
            <div class="bootstrap-modal">
                <!-- Modal Tambah-->
                <div class="modal fade" id="modalTambah">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Pelajaran</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    onclick="closeModal()"><span>&times;</span>
                                </button>
                            </div>
                            <form class="form-horizontal">
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Kode Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="" name="kd_mapel"
                                                    value="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Nama Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="" name="nama_mapel">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Muatan</label>
                                                <select id="inputState" class="form-control" name="muatan">
                                                    <option value="">
                                                        <<--Silahkan Pilih Muatan-->>
                                                    </option>
                                                    <option value="Lokal">Lokal</option>
                                                    <option value="Umum">Umum</option>
                                                    <option value="Agama">Agama</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>KKM</label>
                                                <input type="number" class="form-control" placeholder="" name="kkm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        onclick="closeModal()">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="create()">Tambah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <div class="col-lg-12">
        <div class="bootstrap-modal">
            <!-- Modal Edit-->
            <div class="modal fade" id="modalEdit">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ubah Ruangan</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                            </button>
                        </div>
                        <form class="form-horizontal">
                            <div class="modal-body">
                                <div class="form-group col-md-12">
                                    <label>Kode Pelajaran</label>
                                    <input type="text" class="form-control" placeholder="" name="kd_mapel" value=""
                                        readonly>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Nama Pelajaran</label>
                                    <input type="text" class="form-control" placeholder="" name="nama_mapel">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Muatan</label>
                                    <select id="inputState" class="form-control" name="muatan">
                                        <option value="">
                                            <<--Silahkan Pilih Muatan-->>
                                        </option>
                                        <option value="Lokal">Lokal</option>
                                        <option value="Umum">Umum</option>
                                        <option value="Agama">Agama</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>KKM</label>
                                    <input type="number" class="form-control" placeholder="" name="kkm">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    onclick="closeModal()">Close</button>
                                <button type="button" class="btn btn-primary" onclick="update(id_mapel)">Simpan
                                    Perubahan</button>
                            </div>
                        </form>
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
            $('#daftarSiswa').hide();
            dataTable();
        });

        function noUrut() {
            $.ajax({
                url: 'http://localhost:8000/pelajaran/noUrut',
                type: 'GET',

                success: function(data) {
                    $('[name=kd_mapel]').val(data);
                }
            });
        }

        function dataTable() {
            $('#table').DataTable({

                "ajax": {
                    "url": "http://localhost:8000/pelajaran/dataTable",
                    "dataSrc": ""
                },
                "columns": [{
                        data: null,
                        sortable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: "kd_mapel",
                    },
                    {
                        data: "nama_mapel"
                    },
                    {
                        data: "muatan"
                    },
                    {
                        data: "kkm"
                    },
                    {
                        data: "id_mapel",
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
            $("#modalTambah").modal('show');
            noUrut();
        }

        function closeModal() {
            $("#modalEdit").modal('hide');
            $("#modalTambah").modal('hide');
        }

        function create() {
            var kd_mapel = $('[name=kd_mapel]').val();
            var nama_mapel = $('[name=nama_mapel]').val();
            var muatan = $('[name=muatan]').val();
            var kkm = $('[name=kkm]').val();

            $.ajax({
                url: 'http://localhost:8000/pelajaran/create',
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    kd_mapel: kd_mapel,
                    nama_mapel: nama_mapel,
                    muatan: muatan,
                    kkm: kkm,
                },
                success: function(data) {

                    $("#modalTambah").modal('hide');
                    noUrut();
                    $('[name=nama_mapel]').val("");
                    $('[name=muatan]').val("");
                    $('[name=kkm]').val("");

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

                    $('#table').DataTable().destroy();

                    dataTable();
                },
                error: function(request, status, error) {

                    $("#exampleModal").modal('hide');
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
                url: 'http://localhost:8000/pelajaran/' + id + '/edit',
                type: 'GET',

                success: function(data) {
                    $("#modalEdit").modal('show');

                    $.each(data, function(key, value) {
                        id_mapel = data[key].id_mapel;
                        kd_mapel = data[key].kd_mapel;
                        nama_mapel = data[key].nama_mapel;
                        muatan = data[key].muatan;
                        kkm = data[key].kkm;

                        $('#modalEdit').find('[name=kd_mapel]').val(kd_mapel);
                        $('#modalEdit').find('[name=nama_mapel]').val(nama_mapel);
                        $('#modalEdit').find('[name=muatan]').val(muatan);
                        $('#modalEdit').find('[name=kkm]').val(kkm);
                    });
                }
            });
        }

        function update(id) {
            var kd_mapel = $('#modalEdit').find('[name=kd_mapel]').val();
            var nama_mapel = $('#modalEdit').find('[name=nama_mapel]').val();
            var muatan = $('#modalEdit').find('[name=muatan]').val();
            var kkm = $('#modalEdit').find('[name=kkm]').val();

            $.ajax({
                url: 'http://localhost:8000/pelajaran/' + id + '/update',
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    kd_mapel: kd_mapel,
                    nama_mapel: nama_mapel,
                    muatan: muatan,
                    kkm: kkm,

                },
                success: function(data) {

                    $("#modalEdit").modal('hide');
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

                    $('#table').DataTable().destroy();

                    dataTable();
                },
                error: function(request, status, error) {

                    $("#exampleModal").modal('hide');
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
                        url: 'http://localhost:8000/pelajaran/' + id + '/delete',
                        type: 'GET',
                        success: function(data) {
                            Swal.fire(
                                'Delete!',
                                'Data telah berhasil dihapus',
                                'success'
                            )
                            $('#table').DataTable().destroy();
                            dataTable();
                        }
                    })
                }
            })

        }

    </script>
@endsection
