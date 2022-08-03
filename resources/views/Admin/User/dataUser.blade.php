@extends('Admin.layouts.main')
@section('title', 'Data User')
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
                            <h1 class="title-1 text-white">Data User</h1>
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
                                <div class="row">
                                    <div class="form-group col-md-10">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modalTambah">Tambah
                                            User</button>
                                    </div>
                                </div>
                                <table
                                    class="table table-striped table-bordered zero-configuration table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Anhar</td>
                                            <td>anhar3004</td>
                                            <td>Admin</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="" data-toggle="modal" data-target="#modalEdit">
                                                        <span class="badge badge-pill gradient-3">
                                                            <i class="icon-pencil text-white"></i>
                                                        </span>
                                                    </a>
                                                    <a href=""
                                                        onclick="return confirm('apakah yakin akan di hapus ?')">
                                                        <span class="badge badge-pill gradient-2">
                                                            <i class="icon-pencil text-white"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Anhar</td>
                                            <td>anhar3004</td>
                                            <td>Admin</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="" data-toggle="modal" data-target="#modalEdit">
                                                        <span class="badge badge-pill gradient-3">
                                                            <i class="icon-pencil text-white"></i>
                                                        </span>
                                                    </a>
                                                    <a href=""
                                                        onclick="return confirm('apakah yakin akan di hapus ?')">
                                                        <span class="badge badge-pill gradient-2">
                                                            <i class="icon-pencil text-white"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Anhar</td>
                                            <td>anhar3004</td>
                                            <td>Admin</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a href="" data-toggle="modal" data-target="#modalEdit">
                                                        <span class="badge badge-pill gradient-3">
                                                            <i class="icon-pencil text-white"></i>
                                                        </span>
                                                    </a>
                                                    <a href=""
                                                        onclick="return confirm('apakah yakin akan di hapus ?')">
                                                        <span class="badge badge-pill gradient-2">
                                                            <i class="icon-pencil text-white"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                        Guru</button>
                                </div>
                                <table class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>username</th>
                                            <th>Email</th>
                                            <th>Password</th>
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
                                <h5 class="modal-title">Tambah User</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            {{-- <div class="form-group col-md-12">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="">
                                            </div> --}}
                                            <div class="form-group col-md-12">
                                                <label>Level</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected="selected">Pilih Level</option>
                                                    <option>Admin</option>
                                                    <option>Guru</option>
                                                    <option>Wali Kelas</option>
                                                    <option>Siswa</option>
                                                    <option>Kepala Sekolah</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Pilih Level</button>
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
                                <h5 class="modal-title">Ubah User</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Level</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected="selected">Pilih Level</option>
                                                    <option>Admin</option>
                                                    <option>Guru</option>
                                                    <option>Wali Kelas</option>
                                                    <option>Siswa</option>
                                                    <option>Kepala Sekolah</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Simpan Data</button>
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
        function dataGuru() {
            $('#table').dataGuru({

                "ajax": {
                    "url": "http://localhost:8000/guru/dataGuru",
                    "dataSrc": ""
                },
                "columns": [{
                        data: "id_guru",
                        sortable: false,
                        order: [
                            ["id_guru", 'asc']
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
    </script>
@endsection
