@extends('Admin.layouts.main')

@section('title', 'Data Ruangan')

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
                            <h1 class="title-1 text-white">Data Ruangan</h1>
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
                                        Ruangan</button>
                                </div>
                                @if (session('sukses'))
                                    <div class="form-group col-md-12">
                                        <div class="card-content">
                                            <div class="alert  gradient-1" role="alert">
                                                {{ session('sukses') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <table
                                    class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Ruangan</th>
                                            <th>Nama Ruangan</th>
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
                                <h5 class="modal-title">Tambah Ruangan</h5>
                                <button type="button" class="close" data-dismiss="modal" onclick="closeModal()"><span>&times;</span>
                                </button>
                            </div>
                            <form class="form-horizontal">
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Kode Ruangan</label>
                                                <input name="kd_ruangan" type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Nama Ruangan</label>
                                                <input name="ruangan" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="create()">Tambah Data</button>
                                </div>
                            </form>
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
                                    <button type="button" class="close" data-dismiss="modal" onclick="closeModal()"><span>&times;</span>
                                    </button>
                                </div>
                                <form  class="form-horizontal">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <div class="basic-form">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Kode Ruangan</label>
                                                    <input name="kd_ruangan" type="text" class="form-control"
                                                        placeholder="" value="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Nama Ruangan</label>
                                                    <input name="ruangan" type="text" class="form-control" placeholder=""
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Close</button>
                                        <button type="button" class="btn btn-primary" onclick="update(id_ruangan)">Simpan Data</button>
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
            dataTable();
        });

        function dataTable() {
            $('#table').DataTable({

                "ajax": {
                    "url": "http://localhost:8000/admin/ruangan/dataTable",
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
                        data: "kd_ruangan",
                    },
                    {
                        data: "ruangan"
                    },
                    {
                        data: "id_ruangan",
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
            $('[name=kd_ruangan]').val("");
            $('[name=ruangan]').val("");
        }

        function closeModal() {
            $("#modalEdit").modal('hide');
            $("#modalTambah").modal('hide');
        }

        function create() {
            var kd_ruangan = $('[name=kd_ruangan]').val();
            var ruangan = $('[name=ruangan]').val();

            $.ajax({
                url: 'http://localhost:8000/admin/ruangan/create',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    kd_ruangan: kd_ruangan,
                    ruangan: ruangan,
                },
                success: function(data) {

                    $("#modalTambah").modal('hide');
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
                url: 'http://localhost:8000/admin/ruangan/' + id + '/edit',
                type: 'GET',

                success: function(data) {
                    $("#modalEdit").modal('show');
                    {{-- $("#modal-title").contents().last()[0].textContent='Ubah Jadwal Pelajaran'; --}}

                    $.each(data, function(key, value) {
                        id_ruangan = data[key].id_ruangan;
                        kd_ruangan = data[key].kd_ruangan;
                        ruangan = data[key].ruangan;

                        $('#modalEdit').find('[name=kd_ruangan]').val(kd_ruangan);
                        $('#modalEdit').find('[name=ruangan]').val(ruangan);
                    });
                }
            });
        }

        function update(id) {
            var kd_ruangan = $('#modalEdit').find('[name=kd_ruangan]').val();
            var ruangan = $('#modalEdit').find('[name=ruangan]').val();

            $.ajax({
                url: 'http://localhost:8000/admin/ruangan/' + id + '/update',
                type: 'put',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    kd_ruangan: kd_ruangan,
                    ruangan: ruangan,

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
                        url: 'http://localhost:8000/admin/ruangan/' + id + '/delete',
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
