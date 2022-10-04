@extends('WaliKelas.layouts.main')

@section('title', 'Absensi Siswa')

@include('WaliKelas.layouts.header')

@include('WaliKelas.layouts.sidebar')


@section('content')

    <!--**********************************
                                        Content body start
                                    ***********************************-->
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card gradient-4">
                        <div class="card-body" id="card_body">
                            <h1 class="title-1 text-white">Data Absensi Siswa</h1>
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
                                        Absensi</button>
                                </div>

                                <table class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Siswa</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                            <th>Periode</th>
                                            <th>Hadir</th>
                                            <th>Sakit</th>
                                            <th>Alfa</th>
                                            <th>Izin</th>
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
            <div class="row" id="Absensi">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-md-12" id="semester">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center" id="tableAbsensi">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NIS</th>
                                            <th rowspan="2">Nama</th>
                                            <th colspan="4">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>Hadir</th>
                                            <th>Sakit</th>
                                            <th>Izin</th>
                                            <th>Alfa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group col-md-9">
                                <div name="btnAbsensi" class="text-center">

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
            $('#formEdit').hide();
            {{--  dataTable();  --}}
        });

        function dataTable() {
            $('#table').DataTable({

                "ajax": {
                    "url": "http://localhost:8000/wali_kelas/absensi/dataTable",
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
                        data: "nama_lengkap",
                        order: [
                            [null, 'asc']
                        ]
                    },
                    { data: "kelas",

                    },
                    {

                    },
                    {

                    },
                    {

                    },
                    {

                    },
                    {

                    },
                    {

                    },
                    {
                        data: "id_siswa",
                        mRender: function(data) {
                            return `<div>
                                <a href="" data-toggle="modal" onclick="editPengetahuan(${data})">
                                    <span class="badge badge-pill gradient-3">
                                    <i class="fa fa-pencil text-white"></i>
                                    </span>
                                </a>
                             </div>`;
                        }
                    },

                ]
            })
        }

        function dataTable() {
            $('#tableAbsensi').DataTable({

                "ajax": {
                    "url": "http://localhost:8000/wali_kelas/absensi/dataTableAbsensi",
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
                        data: "nis",
                    },
                    {
                         data: "nama_lengkap",
                    },
                    {
                        data : "",
                    },
                    {
                        data : "",
                    },
                    {
                        data : "",
                    },
                    {
                        data : "",
                    },
                    {
                        data: "id_siswa",
                        mRender: function(data) {
                            return `<div>
                                <a href="" data-toggle="modal" onclick="editPengetahuan(${data})">
                                    <span class="badge badge-pill gradient-3">
                                    <i class="fa fa-pencil text-white"></i>
                                    </span>
                                </a>
                             </div>`;
                        }
                    },

                ]
            })
        }

        function formTambah(id) {

            $('#tableSaran').DataTable().destroy();
            $('#Saran').find('[name=btnSaran]').empty();
            $('#Saran').find('#semester').empty();
            $('[name=saran_emosional]').val("");
            $('[name=saran_akal]').val("");
            $('[name=saran_spiritual]').val("");


            $.ajax({
                url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/formTambahSaran',
                type: 'GET',

                success: function(data) {
                    $.each(data, function(key, value) {
                        id_siswa = data[key].id_siswa;
                        kelas = data[key].kelas;
                        nama_lengkap = data[key].nama_lengkap;
                    });

                    $('#Saran').find('#semester').append(`
                    <label>Semester</label>
                                        <select id="inputState" class="form-control" name="semester"
                                            onchange="formSaran(${id},'${nama_lengkap}')">
                                            <option>
                                                <-- Pilih Semester-->
                                            </option>
                                            <option value="1"> Ganjil</option>
                                            <option value="2"> Genap</option>
                                        </select>
                    `);



                    $('#Saran').find('[name="btnSaran"]').append(`
                    <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary mb-1" onclick="createSaran(${id_siswa}, ${kelas})">Tambah Data</button>
                    `);

                    $("#dataTable").hide();
                    $("#Saran").show();
                    dataTableSaran(nama_lengkap);

                }
            });

        }

    </script>
@endsection
