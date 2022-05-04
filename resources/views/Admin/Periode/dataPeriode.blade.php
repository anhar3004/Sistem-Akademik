@extends('Admin.layouts.main')

@section('title', 'Data Periode')

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
                    <div class="card gradient-9">
                        <div class="card-body ">
                            <h1 class="title-1 text-white">Data Periode</h1>
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
                                    <button type="button" class="btn  gradient-9" onclick="formTambah()">Tambah
                                        Periode</button>
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
                                            <th>Periode Awal</th>
                                            <th>Periode Akhir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
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
                            <div class="modal-header  gradient-9">
                                <h5 class="modal-title text-white">Tambah Periode</h5>
                                <button type="button" class="close" data-dismiss="modal" onclick="closeModal()"><span>&times;</span>
                                </button>
                            </div>
                            <form  method="post" class="form-horizontal">
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-5 mx-auto">
                                            <div class="input-group">
                                                <input name="periode_awal" type="number" class="form-control text-center"
                                                    name="start" value="2018">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mx-auto">To</label>
                                        </div>
                                        <div class="col-md-5 mx-auto">
                                            <div class=" input-group text-center">
                                                <input name="periode_akhir" type="number" class="form-control text-center"
                                                    name="end" value="2019">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn  gradient-1" data-dismiss="modal" onclick="closeModal()">Close</button>
                                    <button type="button" class="btn  gradient-9" onclick="create()">Tambah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>

        @foreach ($periode as $p)
            <div class="col-lg-12">
                <div class="bootstrap-modal">
                    <!-- Modal Edit-->
                    <div class="modal fade" id="modalEdit">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header  gradient-5">
                                    <h5 class="modal-title text-white">Ubah Periode</h5>
                                    <button type="button" class="close" data-dismiss="modal" onclick="closeModal()"><span>&times;</span>
                                    </button>
                                </div>
                                <form  method="post" class="form-horizontal">
                                    <div class="modal-body">
                                        <div class="row ">
                                            <div class="col-md-5 mx-auto">
                                                <div class="input-group">
                                                    <input name="periode_awal" type="number"
                                                        class="form-control text-center" name="start"
                                                        value="">
                                                </div>
                                            </div>
                                            <div>
                                                <label class="mx-auto">To</label>
                                            </div>
                                            <div class="col-md-5 mx-auto">
                                                <div class=" input-group text-center">
                                                    <input name="periode_akhir" type="text" class="form-control text-center"
                                                        name="end" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn  gradient-9" data-dismiss="modal" onclick="closeModal()">Close</button>
                                        <button type="button" class="btn  gradient-5" onclick="update(id_periode)">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
                    "url": "http://localhost:8000/periode/dataTable",
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
                        data: "periode_awal",
                        order: [
                            [null, 'asc']
                        ]
                    },
                    {
                        data: "periode_akhir"
                    },
                    {
                        data: "id_periode",
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
        }

        function closeModal() {
            $("#modalEdit").modal('hide');
            $("#modalTambah").modal('hide');
        }

        function create() {
            var periode_awal = $('[name=periode_awal]').val();
            var periode_akhir = $('[name=periode_akhir]').val();

            $.ajax({
                url: 'http://localhost:8000/periode/create',
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    periode_awal: periode_awal,
                    periode_akhir: periode_akhir,
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
                url: 'http://localhost:8000/periode/' + id + '/edit',
                type: 'GET',

                success: function(data) {
                    $("#modalEdit").modal('show');
                    {{-- $("#modal-title").contents().last()[0].textContent='Ubah Jadwal Pelajaran'; --}}

                    $.each(data, function(key, value) {
                        id_periode = data[key].id_periode;
                        periode_awal = data[key].periode_awal;
                        periode_akhir = data[key].periode_akhir;

                        $('#modalEdit').find('[name=periode_awal]').val(periode_awal);
                        $('#modalEdit').find('[name=periode_akhir]').val(periode_akhir);
                    });
                }
            });
        }

        function update(id){
            var periode_awal = $('#modalEdit').find('[name=periode_awal]').val();
            var periode_akhir = $('#modalEdit').find('[name=periode_akhir]').val();

            $.ajax({
                url: 'http://localhost:8000/periode/'+ id +'/update',
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    periode_awal: periode_awal,
                    periode_akhir: periode_akhir,

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
                        url: 'http://localhost:8000/periode/' + id + '/delete',
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
