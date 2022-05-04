@extends('Admin.layouts.main')

@section('title', 'Data Ruangan')

@include('Admin.layouts.header')

@include('Admin.layouts.sidebar')


@section('content')

    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card gradient-4">
                        <div class="card-body ">
                            <h1 class="title-1 text-white">Data Kelas</h1>
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
                                <div class="form-group col-12">
                                    <button type="button" class="btn btn-primary" onclick="formTambah()">Tambah
                                        Kelas</button>
                                </div>
                                <table class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Ruangan</th>
                                            <th>Wali Kelas</th>
                                            <th>Daftar Siswa</th>
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

          <div id="daftarSiswa">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="title-1 ">Daftar Siswa</h2>
                            <br>
                            <div class="progress" style="height: 6px">
                                <div class="progress-bar " style="width: 100%"></div>
                            </div>
                            <br>
                            <table
                                class="table table-striped table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
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
                                <h5 class="modal-title">Tambah Kelas</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    onclick="closeModal()"><span>&times;</span>
                                </button>
                            </div>
                            <form class="form-horizontal">
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Kelas</label>
                                                <input type="number" class="form-control" placeholder="Nama Kelas"
                                                    name="kelas">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Ruangan</label>
                                                <select id="inputState" class="form-control" name="ruangan">
                                                    <option value="">
                                                        <-- Silahkan Plih Ruangan Kelas -->
                                                    </option>
                                                    @foreach ($ruangan as $r)
                                                        <option value="{{ $r->id_ruangan }}">{{ $r->kd_ruangan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Wali Kelas</label>
                                                <select id="inputState" class="form-control" name="walkes">
                                                    <option value="">
                                                        <-- Silahkan Plih Wali Kelas -->
                                                    </option>
                                                    @foreach ($guru as $g)
                                                        <option value="{{ $g->id_guru }}">{{ $g->nama_lengkap }}
                                                        </option>
                                                    @endforeach
                                                </select>
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
            <!-- #/ container -->
        </div>


        <div class="col-lg-12">
            <div class="bootstrap-modal">
                <!-- Modal Edit-->
                <div class="modal fade" id="modalEdit">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Kelas</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    onclick="closeModal()"><span>&times;</span>
                                </button>
                            </div>
                            <form class="form-horizontal">
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Kelas</label>
                                                <input type="number" class="form-control" placeholder="Nama Kelas"
                                                    name="kelas" value="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Ruangan</label>
                                                <select id="inputState" class="form-control" name="ruangan">
                                                    @foreach ($ruangan as $r)
                                                        </option>
                                                        <option value="{{ $r->id_ruangan }}">
                                                            {{ $r->kd_ruangan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Wali Kelas</label>
                                                <select id="inputState" class="form-control" name="walkes">
                                                    <option value="">
                                                        <-- Silahkan Plih Wali Kelas -->
                                                    </option>
                                                    @foreach ($guru as $g)
                                                        <option value="{{ $g->id_guru }}">
                                                            {{ $g->nama_lengkap }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        onclick="closeModal()">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="update(id_kelas)">Simpan
                                        Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            event.preventDefault();
            $('#daftarSiswa').hide();
            dataTable();
        });

        function dataTable() {
            $('#table').DataTable({

                "ajax": {
                    "url": "http://localhost:8000/kelas/dataTable",
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
                        data: "kelas",
                        order: [
                            [null, 'asc']
                        ]
                    },
                    {
                        data: "ruangan"
                    },
                    {
                        data: "nama_lengkap"
                    },
                    {
                        data: "kelas",
                        mRender: function(data) {
                            return `<div>
                                        <a href="" data-toggle="modal" onclick="daftarSiswa(${data})">
                                            <span class="badge badge-pill gradient-1">
                                            <i class="icon-eye text-white"></i>
                                            </span>
                                        </a>
                                     </div>`;
                        }
                    },
                    {
                        data: "id_kelas",
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
            var kelas = $('[name=kelas]').val();
            var ruangan = $('[name=ruangan]').val();
            var walkes = $('[name=walkes]').val();

            $.ajax({
                url: 'http://localhost:8000/kelas/create',
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    kelas: kelas,
                    ruangan: ruangan,
                    walkes: walkes,
                },
                success: function(data) {

                    $("#modalTambah").modal('hide');
                    $('[name=kelas]').val("");
                    $('[name=ruangan]').val("");
                    $('[name=walkes]').val("");
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
                url: 'http://localhost:8000/kelas/' + id + '/edit',
                type: 'GET',

                success: function(data) {
                    $("#modalEdit").modal('show');
                    {{-- $("#modal-title").contents().last()[0].textContent='Ubah Data Kelas'; --}}

                    $.each(data, function(key, value) {
                        id_kelas = data[key].id_kelas;
                        kelas = data[key].kelas;
                        ruangan = data[key].ruangan;
                        walkes = data[key].walkes;

                        $('#modalEdit').find('[name=kelas]').val(kelas);
                        $('#modalEdit').find('[name=ruangan]').val(ruangan);
                        $('#modalEdit').find('[name=walkes]').val(walkes);
                    });
                }
            });
        }

        function update(id) {
            var kelas = $('#modalEdit').find('[name=kelas]').val();
            var ruangan = $('#modalEdit').find('[name=ruangan]').val();
            var walkes = $('#modalEdit').find('[name=walkes]').val();

            $.ajax({
                url: 'http://localhost:8000/kelas/' + id + '/update',
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    kelas: kelas,
                    ruangan: ruangan,
                    walkes: walkes,

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
                        url: 'http://localhost:8000/kelas/' + id + '/delete',
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

        function daftarSiswa(id) {
            $('#daftarSiswa').find('tbody').empty();
            $.ajax({
                url: 'http://localhost:8000/kelas/' + id + '/daftarSiswa',
                type: 'GET',
                success: function(data) {
                    $('#daftarSiswa').show();
                     i = 1 ;

                    $.each(data, function(key, value) {
                        nama_lengkap = data[key].nama_lengkap;
                        nis = data[key].nis;
                        kelas = data[key].kelas;


                        $('#daftarSiswa').find('tbody').append(`<tr>
                            <td>${i++}</td>
                            <td>${kelas}</td>
                            <td>${nis}</td>
                            <td>${nama_lengkap}</td>
                        </tr>`);

                    });


                }
            })
        }
    </script>
@endsection
