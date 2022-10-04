@extends('Guru.layouts.main')

@section('title', 'Dashboard Guru')

@include('Guru.layouts.header')

@include('Guru.layouts.sidebar')


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
                            <h1 class="title-1 text-white">Data Nilai Siswa</h1>
                            <br>
                            <div class="progress" style="height: 6px">
                                <div class="progress-bar " style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="dataTable">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Kelas</th>
                                            <th rowspan="2">Kode Mapel</th>
                                            <th rowspan="2">Mata Pelajaran</th>
                                            <th rowspan="2">Lihat Nilai Siswa</th>
                                            <th colspan="2">Aspek Pengetahuan</th>
                                            <th rowspan="2">Aspek Keterampilan</th>
                                        </tr>
                                        <th >Penilaian Harian</th>
                                        <th >Nilai Ujian</th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="PenilaianHarian">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-md-12" id="semester">
                                        </div>
                                        <div id="formPenilaianHarian">
                                            <div class="form-group col-md-12">
                                                <label>Nama Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="" readonly
                                                    name="nama_mapel">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Siswa</label>
                                                <select id="inputState" class="form-control" name="siswa">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Penilaian Harian 1</label>
                                                <input type="text" class="form-control" placeholder="" name="ph1">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Penilaian Harian 2</label>
                                                <input type="text" class="form-control" placeholder="" name="ph2">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Penilaian Harian 3</label>
                                                <input type="text" class="form-control" placeholder="" name="ph3">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Penilaian Harian 4</label>
                                                <input type="text" class="form-control" placeholder="" name="ph4">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Penilaian Harian 5</label>
                                                <input type="text" class="form-control" placeholder="" name="ph5">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Penilaian Harian 6</label>
                                                <input type="text" class="form-control" placeholder="" name="ph6">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Penilaian Harian 7</label>
                                                <input type="text" class="form-control" placeholder="" name="ph7">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Penilaian Harian 8</label>
                                                <input type="text" class="form-control" placeholder="" name="ph8">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div name="btn_formTambahPelajaran">
                                            </div>
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
                                <table class="table table-striped table-bordered table-hover text-center"
                                    id="tablePenilaianHarian">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Pelajaran</th>
                                            <th rowspan="2">NIS</th>
                                            <th rowspan="2">Nama</th>
                                            <th colspan="8">Penilaian Harian</th>
                                            <th rowspan="2">RPH</th>
                                            <th rowspan="2">Action</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
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

            <div class="row" id="Pengetahuan">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-md-12" id="semester">

                                        </div>
                                        <div id="formPengetahuan">
                                            <div class="form-group col-md-12">
                                                <label>Nama Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="" readonly
                                                    name="nama_mapel">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Siswa</label>
                                                <select id="inputState" class="form-control" name="siswa">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>PTS</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="pts">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>PAS</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="pas">
                                            </div>

                                        </div>
                                        <div class="form-group col-md-12">
                                            <div name="btn_formTambahPelajaran">
                                            </div>
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
                                <table class="table table-striped table-bordered table-hover text-center"
                                    id="tablePengetahuan">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Pelajaran</th>
                                            <th rowspan="2">NIS</th>
                                            <th rowspan="2">Nama</th>
                                            <th colspan="3">Aspek Pengetahuan</th>
                                            <th rowspan="2">HPA</th>
                                            <th rowspan="2">PRE</th>
                                            <th rowspan="2">Action</th>
                                        </tr>
                                        <tr>
                                            <th>RPH</th>
                                            <th>PTS</th>
                                            <th>PAS</th>
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

            <div class="row" id="Keterampilan">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-md-12" id="semester">
                                        </div>
                                        <div id="formKeterampilan">
                                            <div class="form-group col-md-12">
                                                <label>Nama Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="" readonly
                                                    name="nama_mapel">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Siswa</label>
                                                <select id="inputState" class="form-control" name="siswa">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Keterampilan 1</label>
                                                <input type="text" class="form-control" placeholder="" name="k1">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Keterampilan 2</label>
                                                <input type="text" class="form-control" placeholder="" name="k2">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Keterampilan 3</label>
                                                <input type="text" class="form-control" placeholder="" name="k3">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Keterampilan 4</label>
                                                <input type="text" class="form-control" placeholder="" name="k4">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Keterampilan 5</label>
                                                <input type="text" class="form-control" placeholder="" name="k5">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div name="btn_formTambahPelajaran">
                                            </div>
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
                                <div class="row">
                                </div>
                                <table class="table table-striped table-bordered table-hover text-center"
                                    id="tableKeterampilan">
                                    <div>
                                        <thead>
                                            <tr id="head">
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Pelajaran</th>
                                                <th rowspan="2">NIS</th>
                                                <th rowspan="2">Nama</th>
                                                <th colspan="5">Aspek Keterampilan</th>
                                                <th rowspan="2">HPA</th>
                                                <th rowspan="2">PRE</th>
                                                <th rowspan="2">Action</th>
                                            </tr>
                                            <tr>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">

                                        </tbody>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function() {
                event.preventDefault();
                $("#Pengetahuan").hide();
                $("#Keterampilan").hide();
                $("#PenilaianHarian").hide();
                $("#formPenilaianHarian").hide();
                $("#formPengetahuan").hide();
                $("#formKeterampilan").hide();
                dataTable();

            });

            function dataTable() {
                $('#table').DataTable({

                    "ajax": {
                        "url": "http://localhost:8000/guru/nilai/dataTable",
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
                        },
                        {
                            data: "kd_mapel"
                        },
                        {
                            data: "nama_mapel"
                        },
                        {
                            data: "id_mengajar",
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
                            data: "id_mengajar",
                            mRender: function(data) {
                                return `<div>
                                        <a href="" data-toggle="modal" onclick="formTambahPenilaianHarian(${data})">
                                            <span class="badge badge-pill gradient-2">
                                            <i class="icon-eye text-white"></i>
                                            </span>
                                        </a>
                                     </div>`;
                            }
                        },
                        {
                            data: "id_mengajar",
                            mRender: function(data) {
                                return `<div>
                                        <a href="" data-toggle="modal" onclick="formTambahNilaiPengetahuan(${data})">
                                            <span class="badge badge-pill gradient-3">
                                            <i class="icon-eye text-white"></i>
                                            </span>
                                        </a>
                                     </div>`;
                            }
                        },
                        {
                            data: "id_mengajar",
                            mRender: function(data) {
                                return `<div>
                                        <a href="" data-toggle="modal" onclick="formTambahNilaiKeterampilan(${data})">
                                            <span class="badge badge-pill gradient-4">
                                            <i class="icon-eye text-white"></i>
                                            </span>
                                        </a>
                                     </div>`;
                            }
                        },
                    ]
                })
            }

            function CloseForm() {
                $("#PenilaianHarian").hide();
                $("#Pengetahuan").hide();
                $("#Keterampilan").hide();
                $("#dataTable").show();
                $("#formPengetahuan").hide();
                $("#formPenilaianHarian").hide();
                $("#formKeterampilan").hide();
                $('#PenilaianHarian').find('#semester').show();
                $('#Pengetahuan').find('#semester').show();
                $('#Keterampilan').find('#semester').show();
            }

            {{-- Aspek Penilaian Harian --}}

            function formPenilaianHarian(id) {

                var semester = $('[name=semester]').children("option:selected").val();
                $("#formPenilaianHarian").show();
                $('#PenilaianHarian').find('#semester').hide();
                $('#tablePenilaianHarian').DataTable().destroy();
                dataTablePenilaianHarian(id, semester);

            }

            function formTambahPenilaianHarian(id) {

                $('#tablePenilaianHarian').DataTable().destroy();
                $('#PenilaianHarian').find('[name=btn_formTambahPelajaran]').empty();
                $('#PenilaianHarian').find('#semester').empty();
                $('[name=nama_mapel]').val("");
                $('[name=siswa]').empty();
                $('[name=ph1]').val("");
                $('[name=ph2]').val("");
                $('[name=ph3]').val("");
                $('[name=ph4]').val("");
                $('[name=ph5]').val("");
                $('[name=ph6]').val("");
                $('[name=ph7]').val("");
                $('[name=ph8]').val("");

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/' + id + '/formTambahNilaiPenilaianHarian',
                    type: 'GET',

                    success: function(data) {
                        $('#PenilaianHarian').find('#semester').append(`
                        <label>Semester</label>
                                            <select id="inputState" class="form-control" name="semester"
                                                onchange="formPenilaianHarian(${id})">
                                                <option>
                                                    <-- Pilih Semester-->
                                                </option>
                                                <option value="1"> Ganjil</option>
                                                <option value="2"> Genap</option>
                                            </select>
                        `);
                        $.each(data, function(key, value) {
                            id_mapel = data[key].mapel;
                            kd_mapel = data[key].kd_mapel;
                            nama_mapel = data[key].nama_mapel;
                            id_siswa = data[key].id_siswa;
                            nama_lengkap = data[key].nama_lengkap;
                            kelas = data[key].kelas;

                            $('[name=nama_mapel]').val(nama_mapel);
                            $('#PenilaianHarian').find('[name=siswa]').append(` <option value="${id_siswa}"> ${nama_lengkap}
                        </option>
                        `);

                        });

                        $("#dataTable").hide();
                        $("#PenilaianHarian").show();
                        dataTablePenilaianHarian();

                        $('#PenilaianHarian').find('[name=btn_formTambahPelajaran]').append(`
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="CloseForm()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="createPenilaianHarian(${id},${kelas})">Tambah Data</button>
                        `);

                    }
                });

            }

            function dataTablePenilaianHarian(mapel, semester) {

                $('#tablePenilaianHarian').DataTable({

                    "ajax": {
                        "url": "http://localhost:8000/guru/nilai/" + mapel + "/" + semester +
                            "/dataTablePenilaianHarian",
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
                            data: "nama_mapel",
                        },
                        {
                            data: "nis",
                        },
                        {
                            data: "nama_lengkap"
                        },
                        {
                            data: "PH1"
                        },
                        {
                            data: "PH2"
                        },
                        {
                            data: "PH3"
                        },
                        {
                            data: "PH4"
                        },
                        {
                            data: "PH5"
                        },
                        {
                            data: "PH6"
                        },
                        {
                            data: "PH7"
                        },
                        {
                            data: "PH8",
                        },
                        {
                            data: "RPH",
                        },
                        {
                            data: "id_penilaian_harian",
                            mRender: function(data) {
                                return `<div>
                                        <a href="" data-toggle="modal" onclick="editPenilaianHarian(${data})">
                                            <span class="badge badge-pill gradient-1">
                                            <i class="icon-pencil text-white"></i>
                                            </span>
                                        </a>
                                        <a href="" data-toggle="modal" onclick="hapusPenilaianHarian(${data})">
                                            <span class="badge badge-pill gradient-2">
                                            <i class="icon-trash text-white"></i>
                                            </span>
                                        </a>
                                     </div>`;
                            }
                        },
                    ]
                })
            }

            function createPenilaianHarian(id, kelas) {
                var siswa = $('[name=siswa]').val();
                var semester = $('[name=semester]').val();
                var ph1 = $('[name=ph1]').val();
                var ph2 = $('[name=ph2]').val();
                var ph3 = $('[name=ph3]').val();
                var ph4 = $('[name=ph4]').val();
                var ph5 = $('[name=ph5]').val();
                var ph6 = $('[name=ph6]').val();
                var ph7 = $('[name=ph7]').val();
                var ph8 = $('[name=ph8]').val();

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/createPenilaianHarian',
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {

                        semester: semester,
                        mapel: id,
                        kelas: kelas,
                        siswa: siswa,
                        PH1: ph1,
                        PH2: ph2,
                        PH3: ph3,
                        PH4: ph4,
                        PH5: ph5,
                        PH6: ph6,
                        PH7: ph7,
                        PH8: ph8,
                    },
                    success: function(data) {

                        $('[name=ph1]').val("");
                        $('[name=ph2]').val("");
                        $('[name=ph3]').val("");
                        $('[name=ph4]').val("");
                        $('[name=ph5]').val("");
                        $('[name=ph6]').val("");
                        $('[name=ph7]').val("");
                        $('[name=ph8]').val("");

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

                        $('#tablePenilaianHarian').DataTable().destroy();
                        formPenilaianHarian(id);
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

            function editPenilaianHarian(id) {
                $('#PenilaianHarian').find('[name=btn_formTambahPelajaran]').empty();

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/' + id + '/editPenilaianHarian',
                    type: 'GET',

                    success: function(data) {
                        $.each(data, function(key, value) {
                            id_mapel = data[key].mapel;
                            kelas = data[key].kelas;
                            siswa = data[key].siswa;
                            periode = data[key].periode;
                            semester = data[key].semester;
                            ph1 = data[key].PH1;
                            ph2 = data[key].PH2;
                            ph3 = data[key].PH3;
                            ph4 = data[key].PH4;
                            ph5 = data[key].PH5;
                            ph6 = data[key].PH6;
                            ph7 = data[key].PH7;
                            ph8 = data[key].PH8;

                            $('[name=siswa]').val(siswa);
                            $('[name=periode]').val(periode);
                            $('[name=semester]').val(semester);
                            $('[name=ph1]').val(ph1);
                            $('[name=ph2]').val(ph2);
                            $('[name=ph3]').val(ph3);
                            $('[name=ph4]').val(ph4);
                            $('[name=ph5]').val(ph5);
                            $('[name=ph6]').val(ph6);
                            $('[name=ph7]').val(ph7);
                            $('[name=ph8]').val(ph8);
                        });

                        $('#PenilaianHarian').find('[name=btn_formTambahPelajaran]').append(`
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary" onclick="updatePenilaianHarian(${id},${id_mapel},${kelas})">Simpan Data</button>
                    `);
                    }
                });
            }

            function updatePenilaianHarian(id, id_mapel, kelas) {
                $('#PenilaianHarian').find('[name=btn_formTambahPelajaran]').empty();
                var siswa = $('[name=siswa]').val();
                var periode = $('[name=periode]').val();
                var semester = $('[name=semester]').val();
                var ph1 = $('[name=ph1]').val();
                var ph2 = $('[name=ph2]').val();
                var ph3 = $('[name=ph3]').val();
                var ph4 = $('[name=ph4]').val();
                var ph5 = $('[name=ph5]').val();
                var ph6 = $('[name=ph6]').val();
                var ph7 = $('[name=ph7]').val();
                var ph8 = $('[name=ph8]').val();

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/' + id + '/updatePenilaianHarian',
                    type: 'put',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        siswa: siswa,
                        semester: semester,
                        PH1: ph1,
                        PH2: ph2,
                        PH3: ph3,
                        PH4: ph4,
                        PH5: ph5,
                        PH6: ph6,
                        PH7: ph7,
                        PH8: ph8,
                    },
                    success: function(data) {

                        $('[name=ph1]').val("");
                        $('[name=ph2]').val("");
                        $('[name=ph3]').val("");
                        $('[name=ph4]').val("");
                        $('[name=ph5]').val("");
                        $('[name=ph6]').val("");
                        $('[name=ph7]').val("");
                        $('[name=ph8]').val("");

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

                        $('#tablePenilaianHarian').DataTable().destroy();
                        formPenilaianHarian(id_mapel);
                        $('#PenilaianHarian').find('[name=btn_formTambahPelajaran]').append(`
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary" onclick="createPenilaianHarian(${id_mapel},${kelas})">Tambah Data</button>
                    `);
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

            function hapusPenilaianHarian(id) {
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
                            url: 'http://localhost:8000/guru/nilai/' + id + '/deletePenilaianHarian',
                            type: 'GET',
                            success: function(data) {
                                $.each(data, function(key, value) {
                                    id_mapel = data[key].id_mapel;
                                });
                                Swal.fire(
                                    'Delete!',
                                    'Data telah berhasil dihapus',
                                    'success'
                                )

                                $('#tablePenilaianHarian').DataTable().destroy();
                                formPenilaianHarian(id_mapel);
                            }
                        })
                    }
                })

            }

            {{-- Aspek Pengetahuan --}}

            function formPengetahuan(id) {

                var semester = $('[name=semester]').children("option:selected").val();
                $("#formPengetahuan").show();
                $('#Pengetahuan').find('#semester').hide();
                $('#tablePengetahuan').DataTable().destroy();
                dataTablePengetahuan(id, semester);
            }

            function dataTablePengetahuan(mapel, semester) {

                $('#tablePengetahuan').DataTable({

                    "ajax": {
                        "url": "http://localhost:8000/guru/nilai/" + mapel + "/" + semester +
                            "/dataTablePengetahuan",
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
                            data: "nama_mapel",
                        },
                        {
                            data: "nis",
                        },
                        {
                            data: "nama_lengkap"
                        },
                        {
                            data: "RPH"
                        },
                        {
                            data: "PTS"
                        },
                        {
                            data: "PAS"
                        },
                        {
                            data: "HPA"
                        },
                        {
                            data: "predikat"
                        },
                        {
                            data: "id_pengetahuan",
                            mRender: function(data) {
                                return `<div>
                                        <a href="" data-toggle="modal" onclick="editPengetahuan(${data})">
                                            <span class="badge badge-pill gradient-1">
                                            <i class="icon-pencil text-white"></i>
                                            </span>
                                        </a>
                                        <a href="" data-toggle="modal" onclick="hapusPengetahuan(${data})">
                                            <span class="badge badge-pill gradient-2">
                                            <i class="icon-trash text-white"></i>
                                            </span>
                                        </a>
                                     </div>`;
                            }
                        },
                    ]
                })
            }

            function formTambahNilaiPengetahuan(id) {

                $('#tablePengetahuan').DataTable().destroy();
                $('#Pengetahuan').find('[name=btn_formTambahPelajaran]').empty();
                $('#Pengetahuan').find('#semester').empty();
                $('[name=kd_mapel]').val("");
                $('[name=nama_mapel]').val("");
                $('[name=siswa]').empty();
                $('[name=pts]').val("");
                $('[name=pas]').val("");

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/' + id + '/formTambahNilaiPengetahuan',
                    type: 'GET',

                    success: function(data) {
                        $('#Pengetahuan').find('#semester').append(`
                        <label>Semester</label>
                                            <select id="inputState" class="form-control" name="semester"
                                                onchange="formPengetahuan(${id})">
                                                <option>
                                                    <-- Pilih Semester-->
                                                </option>
                                                <option value="1"> Ganjil</option>
                                                <option value="2"> Genap</option>
                                            </select>
                        `);
                        $.each(data, function(key, value) {
                            id_mapel = data[key].mapel;
                            kd_mapel = data[key].kd_mapel;
                            nama_mapel = data[key].nama_mapel;
                            id_siswa = data[key].id_siswa;
                            nama_lengkap = data[key].nama_lengkap;
                            kelas = data[key].kelas;
                            PH = data[key].id_penilaian_harian;


                            $('[name=nama_mapel]').val(nama_mapel);
                            $('#Pengetahuan').find('[name=siswa]').append(` <option value="${id_siswa}"> ${nama_lengkap}
                        </option>
                        `);

                        });

                        $("#dataTable").hide();
                        $("#Pengetahuan").show();
                        dataTablePengetahuan();

                        $('#Pengetahuan').find('[name=btn_formTambahPelajaran]').append(`
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="CloseForm()">Back</button>
                        <button type="button" class="btn btn-primary" onclick="createPengetahuan(${id},${kelas})">Tambah Data</button>
                        `);



                    }
                });

            }

            function createPengetahuan(id, kelas) {
                var siswa = $('#Pengetahuan').find('[name=siswa]').val();
                var semester = $('[name=semester]').val();
                var pts = $('[name=pts]').val();
                var pas = $('[name=pas]').val();

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/createPengetahuan',
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {

                        semester: semester,
                        mapel: id,
                        kelas: kelas,
                        siswa: siswa,
                        PTS: pts,
                        PAS: pas,
                    },
                    success: function(data) {

                        $('[name=pts]').val("");
                        $('[name=pas]').val("");
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

                        $('#tablePengetahuan').DataTable().destroy();
                        formPengetahuan(id);
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

            function editPengetahuan(id) {
                $('#Pengetahuan').find('[name=btn_formTambahPelajaran]').empty();


                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/' + id + '/editPengetahuan',
                    type: 'GET',

                    success: function(data) {
                        $.each(data, function(key, value) {
                            id_mapel = data[key].mapel;
                            kelas = data[key].kelas;
                            siswa = data[key].siswa;
                            periode = data[key].periode;
                            semester = data[key].semester;
                            pts = data[key].PTS;
                            pas = data[key].PAS;

                            $('#Pengetahuan').find('[name=siswa]').val(siswa);
                            $('[name=semester]').val(semester);
                            $('[name=pts]').val(pts);
                            $('[name=pas]').val(pas);
                        });
                        $('#Pengetahuan').find('[name=btn_formTambahPelajaran]').append(`
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary" onclick="updatePengetahuan(${id},${id_mapel},${kelas})">Simpan Data</button>
                    `);
                    }
                });
            }

            function updatePengetahuan(id, id_mapel, kelas) {
                $('#Pengetahuan').find('[name=btn_formTambahPelajaran]').empty();
                var siswa = $('[name=siswa]').val();
                var periode = $('[name=periode]').val();
                var semester = $('[name=semester]').val();
                var pts = $('[name=pts]').val();
                var pas = $('[name=pas]').val();

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/' + id + '/updatePengetahuan',
                    type: 'get',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        semester: semester,
                        PTS: pts,
                        PAS: pas,

                    },
                    success: function(data) {

                        $('[name=pts]').val("");
                        $('[name=pas]').val("");
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

                        $('#tablePengetahuan').DataTable().destroy();
                        formPengetahuan(id_mapel);
                        $('#Pengetahuan').find('[name=btn_formTambahPelajaran]').append(`
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary" onclick="createPengetahuan(${id_mapel},${kelas})">Tambah Data</button>
                    `);
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

            function hapusPengetahuan(id) {
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
                            url: 'http://localhost:8000/guru/nilai/' + id + '/deletePengetahuan',
                            type: 'GET',
                            success: function(data) {
                                $.each(data, function(key, value) {
                                    id_mapel = data[key].id_mapel;
                                });
                                Swal.fire(
                                    'Delete!',
                                    'Data telah berhasil dihapus',
                                    'success'
                                )

                                $('#tablePengetahuan').DataTable().destroy();
                                formPengetahuan(id_mapel);
                            }
                        })
                    }
                })

            }

            {{-- Aspek Keterampilan --}}

            function formKeterampilan(id) {

                var semester = $('[name=semester]').children("option:selected").val();
                $("#formKeterampilan").show();
                $('#Keterampilan').find('#semester').hide();
                $('#tableKeterampilan').DataTable().destroy();
                dataTableKeterampilan(id, semester);
            }

            function formTambahNilaiKeterampilan(id) {
                $('#tableKeterampilan').DataTable().destroy();
                $('#Keterampilan').find('[name=btn_formTambahPelajaran]').empty();
                $('#Keterampilan').find('#semester').empty();
                $('[name=nama_mapel]').val("");
                $('[name=siswa]').empty();
                $('[name=k1]').val("");
                $('[name=k2]').val("");
                $('[name=k3]').val("");
                $('[name=k4]').val("");
                $('[name=k5]').val("");

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/' + id + '/formTambahNilaiKeterampilan',
                    type: 'GET',

                    success: function(data) {
                        $('#Keterampilan').find('#semester').append(`
                        <label>Semester</label>
                                            <select id="inputState" class="form-control" name="semester"
                                                onchange="formKeterampilan(${id})">
                                                <option>
                                                    <-- Pilih Semester-->
                                                </option>
                                                <option value="1"> Ganjil</option>
                                                <option value="2"> Genap</option>
                                            </select>
                        `);

                        $.each(data, function(key, value) {
                            id_mapel = data[key].mapel;
                            kd_mapel = data[key].kd_mapel;
                            nama_mapel = data[key].nama_mapel;
                            id_siswa = data[key].id_siswa;
                            nama_lengkap = data[key].nama_lengkap;
                            kelas = data[key].kelas;

                            $('[name=nama_mapel]').val(nama_mapel);
                            $('#Keterampilan').find('[name=siswa]').append(` <option value="${id_siswa}"> ${nama_lengkap}
                        </option>
                        `);
                        });


                        $("#dataTable").hide();
                        $("#Keterampilan").show();
                        dataTableKeterampilan();

                        $('#Keterampilan').find('[name=btn_formTambahPelajaran]').append(`
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary" onclick="createKeterampilan(${id},${kelas})">Tambah Data</button>
                    `);
                    }
                });

            }

            function dataTableKeterampilan(mapel, semester) {

                $('#tableKeterampilan').DataTable({

                    "ajax": {
                        "url": "http://localhost:8000/guru/nilai/" + mapel + "/" + semester +
                            "/dataTableKeterampilan",
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
                            data: "nama_mapel",
                        },
                        {
                            data: "nis",
                        },
                        {
                            data: "nama_lengkap"
                        },
                        {
                            data: "K1"
                        },
                        {
                            data: "K2"
                        },
                        {
                            data: "K3"
                        },
                        {
                            data: "K4"
                        },
                        {
                            data: "K5"
                        },
                        {
                            data: "HPA"
                        },
                        {
                            data: "predikat"
                        },
                        {
                            data: "id_keterampilan",
                            mRender: function(data) {
                                return `<div>
                                        <a href="" data-toggle="modal" onclick="editKeterampilan(${data})">
                                            <span class="badge badge-pill gradient-1">
                                            <i class="icon-pencil text-white"></i>
                                            </span>
                                        </a>
                                        <a href="" data-toggle="modal" onclick="hapusKeterampilan(${data})">
                                            <span class="badge badge-pill gradient-2">
                                            <i class="icon-trash text-white"></i>
                                            </span>
                                        </a>
                                     </div>`;
                            }
                        },
                    ]
                })
            }

            function createKeterampilan(id,kelas) {
                var siswa = $('#Keterampilan').find('[name=siswa]').val();
                var semester = $('[name=semester]').val();
                var k1 = $('[name=k1]').val();
                var k2 = $('[name=k2]').val();
                var k3 = $('[name=k3]').val();
                var k4 = $('[name=k4]').val();
                var k5 = $('[name=k5]').val();

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/createKeterampilan',
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        semester: semester,
                        mapel: id,
                        kelas: kelas,
                        siswa: siswa,
                        K1: k1,
                        K2: k2,
                        K3: k3,
                        K4: k4,
                        K5: k5,

                    },
                    success: function(data) {

                        $('[name=k1]').val("");
                        $('[name=k2]').val("");
                        $('[name=k3]').val("");
                        $('[name=k4]').val("");
                        $('[name=k5]').val("");
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
                        $('#tableKeterampilan').DataTable().destroy();
                        formKeterampilan(id);

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

            function editKeterampilan(id) {
                $('#Keterampilan').find('[name=btn_formTambahPelajaran]').empty();

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/' + id + '/editKeterampilan',
                    type: 'GET',

                    success: function(data) {
                        $.each(data, function(key, value) {
                            id_mapel = data[key].mapel;
                            kelas = data[key].kelas;
                            siswa = data[key].siswa;
                            periode = data[key].periode;
                            semester = data[key].semester;
                            k1 = data[key].K1;
                            k2 = data[key].K2;
                            k3 = data[key].K3;
                            k4 = data[key].K4;
                            k5 = data[key].K5;

                            $('[name=siswa]').val(siswa);
                            $('[name=semester]').val(semester);
                            $('[name=k1]').val(k1);
                            $('[name=k2]').val(k2);
                            $('[name=k3]').val(k3);
                            $('[name=k4]').val(k4);
                            $('[name=k5]').val(k5);
                        });

                        $('#Keterampilan').find('[name=btn_formTambahPelajaran]').append(`
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary" onclick="updateKeterampilan(${id},${id_mapel},${kelas})">Simpan Data</button>
                    `);
                    }
                });
            }

            function updateKeterampilan(id, id_mapel, kelas) {
                $('#Keterampilan').find('[name=btn_formTambahPelajaran]').empty();
                var siswa = $('#Keterampilan').find('[name=siswa]').val();
                var semester = $('[name=semester]').val();
                var k1 = $('[name=k1]').val();
                var k2 = $('[name=k2]').val();
                var k3 = $('[name=k3]').val();
                var k4 = $('[name=k4]').val();
                var k5 = $('[name=k5]').val();

                $.ajax({
                    url: 'http://localhost:8000/guru/nilai/' + id + '/updateKeterampilan',
                    type: 'put',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        semester: semester,
                        mapel: id,
                        kelas: kelas,
                        siswa: siswa,
                        K1: k1,
                        K2: k2,
                        K3: k3,
                        K4: k4,
                        K5: k5,



                    },
                    success: function(data) {

                        $('[name=k1]').val("");
                        $('[name=k2]').val("");
                        $('[name=k3]').val("");
                        $('[name=k4]').val("");
                        $('[name=k5]').val("");

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

                        $('#tableKeterampilan').DataTable().destroy();
                        formKeterampilan(id_mapel);
                        $('#Keterampilan').find('[name=btn_formTambahPelajaran]').append(`
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary" onclick="createPenilaianHarian(${id_mapel},${kelas})">Tambah Data</button>
                    `);
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

            function hapusKeterampilan(id) {
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
                            url: 'http://localhost:8000/guru/nilai/' + id + '/deleteKeterampilan',
                            type: 'GET',
                            success: function(data) {
                                $.each(data, function(key, value) {
                                    id_mapel = data[key].id_mapel;
                                });
                                Swal.fire(
                                    'Delete!',
                                    'Data telah berhasil dihapus',
                                    'success'
                                )

                                $('#tableKeterampilan').DataTable().destroy();
                                formKeterampilan(id_mapel);
                            }
                        })
                    }
                })

            }




        </script>
    @endsection
