@extends('WaliKelas.layouts.main')

@section('title', 'Mengajar')

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
                            <h1 class="title-1 text-white">Data Perkembangan Siswa</h1>
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
                                <div class="col-md-12">

                                    <table class="table table-striped table-bordered table-hover text-center"
                                        id="table">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">NIS</th>
                                                <th rowspan="2">Nama</th>
                                                <th rowspan="2">Kelas</th>
                                                <th rowspan="2">Cetak</th>
                                                <th colspan="3">Aspek Perkembangan</th>
                                                <th rowspan="2">Saran</th>
                                            </tr>
                                            <tr>
                                                <th>Emosional</th>
                                                <th>Spiritual</th>
                                                <th>Akal</th>
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
            {{-- Aspek Emosional --}}
            <div class="row" id="Emosional">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-md-12" id="semester">
                                        </div>
                                        <div id="formEmosional">
                                            <div class="form-group col-md-12">
                                                <label>Aspek Emosional</label>
                                                <textarea class="form-control"id="" cols="30" rows="5" name="aspek"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Nilai</label>
                                                <input type="number" class="form-control" placeholder="" name="nilai"
                                                    onchange="detailEmosional(nama_lengkap)">
                                            </div>
                                            <div id="detailEmosional">
                                                <div class="form-group col-md-12">
                                                    <label>Predikat</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        name="predikat" readonly>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Deskripsi</label>
                                                    <textarea class="form-control"id="" cols="30" rows="5" name="deskripsi"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div name="btnTambahEmosional" class="text-center">

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
                                    id="tableEmosional">
                                    <thead>
                                        <tr>
                                            <th>Aspek Emosional</th>
                                            <th>Nilai</th>
                                            <th>Predikat</th>
                                            <th>Deskripsi</th>
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
            {{-- Aspek Spiritual --}}
            <div class="row" id="Spiritual">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-md-12" id="semester">
                                        </div>
                                        <div id="formSpiritual">
                                            <div class="form-group col-md-12">
                                                <label>Aspek Spiritual</label>
                                                <textarea class="form-control"id="" cols="30" rows="5" name="aspek"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Nilai</label>
                                                <input type="number" class="form-control" placeholder="" name="nilai"
                                                    onchange="detailSpiritual(nama_lengkap)">
                                            </div>
                                            <div id="detailSpiritual">
                                                <div class="form-group col-md-12">
                                                    <label>Predikat</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        name="predikat" readonly>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Deskripsi</label>
                                                    <textarea class="form-control"id="" cols="30" rows="5" name="deskripsi"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div name="btnTambahSpiritual" class="text-center">

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
                                    id="tableSpiritual">
                                    <thead>
                                        <tr>
                                            <th>Aspek Spiritual</th>
                                            <th>Nilai</th>
                                            <th>Predikat</th>
                                            <th>Deskripsi</th>
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
            {{-- Aspek Akal --}}
            <div class="row" id="Akal">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-md-12" id="semester">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div name="btnAkal" class="text-center">

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
                                <table class="table table-striped table-bordered table-hover text-center" id="tableAkal">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NIS</th>
                                            <th rowspan="2">Nama</th>
                                            <th colspan="2">Aspek Akal</th>
                                            <th rowspan="2">Nilai Akhir</th>
                                        </tr>
                                        <tr>
                                            <th>Nilai Pengetahuan</th>
                                            <th>Nilai Keterampilan</th>
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
             {{-- Aspek Saran --}}
             <div class="row" id="Saran">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="form-group col-md-12" id="semester">
                                        </div>
                                        <div id="formSaran">
                                            <div class="form-group col-md-12">
                                                <label>Saran Emosional</label>
                                                <textarea class="form-control"id="" cols="30" rows="5" name="saran_emosional"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Saran Spiritual</label>
                                                <textarea class="form-control"id="" cols="30" rows="5" name="saran_spiritual"></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Saran Akal</label>
                                                <textarea class="form-control"id="" cols="30" rows="5" name="saran_akal"></textarea>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-12">
                                            <div name="btnSaran" class="text-center">

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
                                <table class="table table-striped table-bordered table-hover text-center" id="tableSaran">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">NIS</th>
                                            <th rowspan="2">Nama</th>
                                            <th colspan="3">Saran-saran</th>
                                            <th rowspan="2">Action</th>
                                        </tr>
                                        <tr>
                                            <th>Saran Emosional</th>
                                            <th>Saran Spiritual</th>
                                            <th>Saran Akal</th>
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
        <!--**********************************
                                                            Content body end
                                                        ***********************************-->

        <script type="text/javascript">
            $(document).ready(function() {
                event.preventDefault();
                $("#Emosional").hide();
                $("#formEmosional").hide();
                $("#Spiritual").hide();
                $("#formSpiritual").hide();
                $("#Akal").hide();
                $("#Saran").hide();
                $("#formSaran").hide();
                dataTable();

            });

            function dataTable() {
                $('#table').DataTable({

                    "ajax": {
                        "url": "http://localhost:8000/wali_kelas/perkembangan/dataTable",
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
                            data: "kelas",
                        },
                        {
                            data: "id_siswa",
                            mRender: function(data) {
                                return `<div>
                                    <a href="" data-toggle="modal" onclick="editPengetahuan(${data})">
                                        <span class="badge badge-pill gradient-3">
                                        <i class="fa fa-print text-white"></i>
                                        </span>
                                    </a>
                                 </div>`;
                            }
                        },
                        {
                            data: "id_siswa",
                            mRender: function(data) {
                                return `<div>
                                    <a href="" data-toggle="modal" onclick="formTambahEmosional(${data})">
                                        <span class="badge badge-pill gradient-1">
                                        <i class="icon-eye text-white"></i>
                                        </span>
                                    </a>
                                 </div>`;
                            }
                        },
                        {
                            data: "id_siswa",
                            mRender: function(data) {
                                return `<div>
                                    <a href="" data-toggle="modal" onclick="formTambahSpiritual(${data})">
                                        <span class="badge badge-pill gradient-2">
                                        <i class="icon-eye text-white"></i>
                                        </span>
                                    </a>
                                 </div>`;
                            }
                        },
                        {
                            data: "id_siswa",
                            mRender: function(data) {
                                return `<div>
                                    <a href="" data-toggle="modal" onclick="DetailAkal(${data})">
                                        <span class="badge badge-pill gradient-4">
                                        <i class="icon-eye text-white"></i>
                                        </span>
                                    </a>
                                 </div>`;
                            }
                        },
                        {
                            data: "id_siswa",
                            mRender: function(data) {
                                return `<div>
                                    <a href="" data-toggle="modal" onclick="formTambahSaran(${data})">
                                        <span class="badge badge-pill gradient-7">
                                        <i class="icon-eye text-white"></i>
                                        </span>
                                    </a>
                                 </div>`;
                            }
                        }
                    ]
                })
            }

            function CloseForm() {
                $("#Spiritual").hide();
                $("#Emosional").hide();
                $("#Akal").hide();
                $("#Saran").hide();
                $("#dataTable").show();
                $("#formSpiritual").hide();
                $("#formEmosional").hide();
                $("#formKeterampilan").hide();
                $("#formSaran").hide();
                $('#Spiritual').find('#semester').show();
                $('#Emosional').find('#semester').show();
                $('#Keterampilan').find('#semester').show();
                $('#Saran').find('#semester').show();
            }

            {{-- Aspek Spiritual --}}

            function formSpiritual(id, nama_lengkap) {

                var semester = $('[name=semester]').children("option:selected").val();
                $("#formSpiritual").show();
                $('#Spiritual').find('#semester').hide();
                $('#tableSpiritual').DataTable().destroy();
                dataTableSpiritual(id, semester);

            }

            function formTambahSpiritual(id) {

                $('#tableSpiritual').DataTable().destroy();
                $('#Spiritual').find('[name=btnTambahSpiritual]').empty();
                $('#Spiritual').find('#semester').empty();
                $('#formSpiritual').find('[name=aspek]').val("");
                $('#formSpiritual').find('[name=nilai]').val("");
                $('#formSpiritual').find('[name=predikat]').val("");
                $('#formSpiritual').find('[name=deskripsi]').val("");


                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/formTambahSpiritual',
                    type: 'GET',

                    success: function(data) {

                        $.each(data, function(key, value) {
                            id_siswa = data[key].id_siswa;
                            kelas = data[key].kelas;
                            nama_lengkap = data[key].nama_lengkap;

                        });

                        $('#Spiritual').find('#semester').append(`
                        <label>Semester</label>
                                            <select id="inputState" class="form-control" name="semester"
                                                onchange="formSpiritual(${id}, '${nama_lengkap}')">
                                                <option>
                                                    <-- Pilih Semester-->
                                                </option>
                                                <option value="1"> Ganjil</option>
                                                <option value="2"> Genap</option>
                                            </select>
                        `);

                        $('#Spiritual').find('[name="btnTambahSpiritual"]').append(`
                        <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                        onclick="CloseForm()">Back</button>
                        <button type="button" class="btn btn-primary mb-1" onclick="createSpiritual(${id_siswa}, ${kelas})">Tambah Data</button>
                        `);

                        $("#dataTable").hide();
                        $("#Spiritual").show();
                        dataTableSpiritual();

                    }
                });

            }

            function dataTableSpiritual(id, semester) {

                $('#tableSpiritual').DataTable({

                    "ajax": {
                        "url": "http://localhost:8000/wali_kelas/perkembangan/" + id + "/" + semester +
                            "/dataTableSpiritual",
                        "dataSrc": ""
                    },
                    "columns": [{
                            data: "aspek_spiritual",
                        },
                        {
                            data: "nilai",
                        },
                        {
                            data: "predikat",
                        },
                        {
                            data: "deskripsi",
                        },
                        {
                            data: "id_spiritual",
                            mRender: function(data) {
                                return `<div>
                                <a href="" data-toggle="modal" onclick="editSpiritual(${data})">
                                    <span class="badge badge-pill gradient-1">
                                    <i class="icon-pencil text-white"></i>
                                    </span>
                                </a>
                                <a href="" data-toggle="modal" onclick="hapusSpiritual(${data})">
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

            function detailSpiritual(nama_lengkap) {

                var nilai = $('#formSpiritual').find('[name=nilai]').val();

                if (nilai >= 90 & nilai <= 100) {
                    var predikat = 'A';
                    var keterangan = 'sangat baik';
                } else if (nilai >= 80 & nilai <= 90) {
                    var predikat = 'B';
                    var keterangan = 'baik';
                } else if (nilai >= 70 & nilai <= 80) {
                    var predikat = 'C';
                    var keterangan = 'cukup baik';
                } else if (nilai >= 60 & nilai <= 70) {
                    var predikat = 'D';
                    var keterangan = 'kurang baik';
                } else if (nilai <= 60) {
                    var predikat = 'E';
                    var keterangan = 'sangat kurang baik';
                }
                $('#detailSpiritual').find('[name=predikat]').val(predikat);
                $('#detailSpiritual').find('[name=deskripsi]').val('Ananda ' + nama_lengkap + ' ' + keterangan +
                    ' dalam pengendalian emosi');

            }

            function createSpiritual(id_siswa, kelas) {
                var semester = $('#Spiritual').find('[name=semester]').val();
                var spiritual = $('#formSpiritual').find('[name=aspek]').val();
                var nilai = $('#formSpiritual').find('[name=nilai]').val();
                var predikat = $('#formSpiritual').find('[name=predikat]').val();
                var deskripsi = $('#formSpiritual').find('[name=deskripsi]').val();

                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/createSpiritual',
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {

                        semester: semester,
                        kelas: kelas,
                        siswa: id_siswa,
                        aspek_spiritual: spiritual,
                        nilai: nilai,
                        predikat: predikat,
                        deskripsi: deskripsi,
                    },
                    success: function(data) {

                        $('#formSpiritual').find('[name=aspek]').val("");
                        $('#formSpiritual').find('[name=nilai]').val("");
                        $('#formSpiritual').find('[name=predikat]').val("");
                        $('#formSpiritual').find('[name=deskripsi]').val("");


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

                        $('#tableSpiritual').DataTable().destroy();
                        formSpiritual(id_siswa);
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

            function editSpiritual(id) {
                $('#Spiritual').find('[name=btnTambahSpiritual]').empty();

                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/editSpiritual',
                    type: 'GET',

                    success: function(data) {
                        $.each(data, function(key, value) {
                            aspek_spiritual = data[key].aspek_spiritual;
                            nilai = data[key].nilai;
                            predikat = data[key].predikat;
                            deskripsi = data[key].deskripsi;
                            id_siswa = data[key].siswa;
                            kelas = data[key].kelas;

                            $('#formSpiritual').find('[name=aspek]').val(aspek_spiritual);
                            $('#formSpiritual').find('[name=nilai]').val(nilai);
                            $('#formSpiritual').find('[name=predikat]').val(predikat);
                            $('#formSpiritual').find('[name=deskripsi]').val(deskripsi);
                        });

                        $('#Spiritual').find('[name=btnTambahSpiritual]').append(`
                    <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary mb-1" onclick="updateSpiritual(${id}, ${id_siswa}, ${kelas})">Simpan Data</button>
                    `);
                    }
                });
            }

            function updateSpiritual(id, id_siswa, kelas) {
                $('#Spiritual').find('[name=btnTambahSpiritual]').empty();
                var aspek = $('#formSpiritual').find('[name=aspek]').val();
                var nilai = $('#formSpiritual').find('[name=nilai]').val();
                var predikat = $('#formSpiritual').find('[name=predikat]').val();
                var deskripsi = $('#formSpiritual').find('[name=deskripsi]').val();


                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/updateSpiritual',
                    type: 'put',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        aspek_spiritual: aspek,
                        nilai: nilai,
                        predikat: predikat,
                        deskripsi: deskripsi,
                        id_siswa: id_siswa

                    },
                    success: function(data) {

                        $('#formSpiritual').find('[name=aspek]').val("");
                        $('#formSpiritual').find('[name=nilai]').val("");
                        $('#formSpiritual').find('[name=predikat]').val("");
                        $('#formSpiritual').find('[name=deskripsi]').val("");

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

                        $('#tableSpiritual').DataTable().destroy();
                        formSpiritual(id_siswa);
                        $('#Spiritual').find('[name=btnTambahSpiritual]').append(`
                    <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary mb-1" onclick="createSpiritual(${id_siswa},${kelas})">Tambah Data</button>
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

            function hapusSpiritual(id) {
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
                            url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/deleteSpiritual',
                            type: 'GET',
                            success: function(data) {
                                $.each(data, function(key, value) {
                                    id_siswa = data[key].siswa;
                                });
                                Swal.fire(
                                    'Delete!',
                                    'Data telah berhasil dihapus',
                                    'success'
                                )

                                $('#tableSpiritual').DataTable().destroy();
                                formSpiritual(id_siswa);
                            }
                        })
                    }
                })

            }


            {{-- Aspek Emosional --}}

            function formEmosional(id, nama_lengkap) {

                var semester = $('[name=semester]').children("option:selected").val();
                $("#formEmosional").show();
                $("#detailEmosional").show();
                $('#Emosional').find('#semester').hide();
                $('#tableEmosional').DataTable().destroy();
                dataTableEmosional(id, semester);

            }

            function formTambahEmosional(id) {

                $('#tableEmosional').DataTable().destroy();
                $('#Emosional').find('[name=btnTambahEmosional]').empty();
                $('#Emosional').find('#semester').empty();
                $('[name=aspek]').val("");
                $('[name=nilai]').val("");
                $('[name=predikat]').val("");
                $('[name=deskripsi]').val("");


                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/formTambahEmosional',
                    type: 'GET',

                    success: function(data) {
                        $.each(data, function(key, value) {
                            id_siswa = data[key].id_siswa;
                            kelas = data[key].kelas;
                            nama_lengkap = data[key].nama_lengkap;
                        });

                        $('#Emosional').find('#semester').append(`
                        <label>Semester</label>
                                            <select id="inputState" class="form-control" name="semester"
                                                onchange="formEmosional(${id},'${nama_lengkap}')">
                                                <option>
                                                    <-- Pilih Semester-->
                                                </option>
                                                <option value="1"> Ganjil</option>
                                                <option value="2"> Genap</option>
                                            </select>
                        `);



                        $('#Emosional').find('[name="btnTambahEmosional"]').append(`
                        <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                        onclick="CloseForm()">Back</button>
                        <button type="button" class="btn btn-primary mb-1" onclick="createEmosional(${id_siswa}, ${kelas})">Tambah Data</button>
                        `);

                        $("#dataTable").hide();
                        $("#Emosional").show();
                        dataTableEmosional(nama_lengkap);

                    }
                });

            }

            function dataTableEmosional(id, semester) {

                $('#tableEmosional').DataTable({

                    "ajax": {
                        "url": "http://localhost:8000/wali_kelas/perkembangan/" + id + "/" + semester +
                            "/dataTableEmosional",
                        "dataSrc": ""
                    },
                    "columns": [{
                            data: "aspek_emosional",
                        },
                        {
                            data: "nilai",
                        },
                        {
                            data: "predikat",
                        },
                        {
                            data: "deskripsi",
                        },
                        {
                            data: "id_emosional",
                            mRender: function(data) {
                                return `<div>
                                <a href="" data-toggle="modal" onclick="editEmosional(${data})">
                                    <span class="badge badge-pill gradient-1">
                                    <i class="icon-pencil text-white"></i>
                                    </span>
                                </a>
                                <a href="" data-toggle="modal" onclick="hapusEmosional(${data})">
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

            function detailEmosional(nama_lengkap) {
                $("#detailEmosional").show();
                var nilai = $('[name=nilai]').val();

                if (nilai >= 90 & nilai <= 100) {
                    var predikat = 'A';
                    var keterangan = 'sangat baik';
                } else if (nilai >= 80 & nilai <= 90) {
                    var predikat = 'B';
                    var keterangan = 'baik';
                } else if (nilai >= 70 & nilai <= 80) {
                    var predikat = 'C';
                    var keterangan = 'cukup baik';
                } else if (nilai >= 60 & nilai <= 70) {
                    var predikat = 'D';
                    var keterangan = 'kurang baik';
                } else if (nilai <= 60) {
                    var predikat = 'E';
                    var keterangan = 'sangat kurang baik';
                }
                $('[name=predikat]').val(predikat);
                $('[name=deskripsi]').val('Ananda ' + nama_lengkap + ' ' + keterangan + ' dalam pengendalian emosi');

            }

            function createEmosional(id_siswa, kelas) {
                var semester = $('[name=semester]').val();
                var emosional = $('[name=aspek]').val();
                var nilai = $('[name=nilai]').val();
                var predikat = $('[name=predikat]').val();
                var deskripsi = $('[name=deskripsi]').val();

                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/createEmosional',
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {

                        semester: semester,
                        kelas: kelas,
                        siswa: id_siswa,
                        aspek_emosional: emosional,
                        nilai: nilai,
                        predikat: predikat,
                        deskripsi: deskripsi,
                    },
                    success: function(data) {

                        $('[name=aspek]').val("");
                        $('[name=nilai]').val("");
                        $('[name=predikat]').val("");
                        $('[name=deskripsi]').val("");


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

                        $('#tableEmosional').DataTable().destroy();
                        formEmosional(id_siswa);
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

            function editEmosional(id) {
                $('#Emosional').find('[name=btnTambahEmosional]').empty();

                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/editEmosional',
                    type: 'GET',

                    success: function(data) {
                        $.each(data, function(key, value) {
                            aspek_emosional = data[key].aspek_emosional;
                            nilai = data[key].nilai;
                            predikat = data[key].predikat;
                            deskripsi = data[key].deskripsi;
                            id_siswa = data[key].siswa;
                            kelas = data[key].kelas;

                            $('[name=aspek]').val(aspek_emosional);
                            $('[name=nilai]').val(nilai);
                            $('[name=predikat]').val(predikat);
                            $('[name=deskripsi]').val(deskripsi);

                        });

                        $('#Emosional').find('[name=btnTambahEmosional]').append(`
                    <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary mb-1" onclick="updateEmosional(${id}, ${id_siswa}, ${kelas})">Simpan Data</button>
                    `);
                    }
                });
            }

            function updateEmosional(id, id_siswa, kelas) {
                $('#Emosional').find('[name=btnTambahEmosional]').empty();
                var aspek = $('[name=aspek]').val();
                var nilai = $('[name=nilai]').val();
                var predikat = $('[name=predikat]').val();
                var deskripsi = $('[name=deskripsi]').val();

                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/updateEmosional',
                    type: 'put',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        aspek_emosional: aspek,
                        nilai: nilai,
                        predikat: predikat,
                        deskripsi: deskripsi,
                        id_siswa: id_siswa
                    },
                    success: function(data) {

                        $('[name=aspek]').val("");
                        $('[name=nilai]').val("");
                        $('[name=predikat]').val("");
                        $('[name=deskripsi]').val("");

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

                        $('#tableEmosional').DataTable().destroy();
                        formEmosional(id_siswa);
                        $('#Emosional').find('[name=btnTambahEmosional]').append(`
                    <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary mb-1" onclick="createEmosional(${id_siswa},${kelas})">Tambah Data</button>
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

            function hapusEmosional(id) {
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
                            url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/deleteEmosional',
                            type: 'GET',
                            success: function(data) {
                                $.each(data, function(key, value) {
                                    id_siswa = data[key].siswa;
                                });
                                Swal.fire(
                                    'Delete!',
                                    'Data telah berhasil dihapus',
                                    'success'
                                )

                                $('#tableEmosional').DataTable().destroy();
                                formEmosional(id_siswa);
                            }
                        })
                    }
                })

            }

            {{-- Aspek Akal --}}

            function dataTableAkal(id, semester) {

                $('#tableAkal').DataTable({

                    "ajax": {
                        "url": "http://localhost:8000/wali_kelas/perkembangan/" + id + "/" + semester +
                            "/dataTableAkal",
                        "dataSrc": ""
                    },
                    "columns": [
                        {
                            data: "nis",
                        },
                        {
                            data: "nama",
                        },
                        {
                            data: "nilai_pengetahuan",
                        },
                        {
                            data: "nilai_keterampilan",
                        },
                        {
                            data: "nilai_akhir",
                        }
                    ]
                })
            }

            function DetailAkal(id) {
                $('#tableAkal').DataTable().destroy();
                $('#Akal').find('[name=btnAkal]').empty();
                $('#Akal').find('#semester').empty();

                $('#Akal').find('#semester').append(`
                <label>Semester</label>
                                    <select id="inputState" class="form-control" name="semester"
                                        onchange="formAkal(${id})">
                                        <option value="0">
                                            <-- Pilih Semester-->
                                        </option>
                                        <option value="1"> Ganjil</option>
                                        <option value="2"> Genap</option>
                                    </select>
                `);
                $('#Akal').find('[name="btnAkal"]').append(`
                <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                onclick="CloseForm()">Back</button>
                `);

                $("#dataTable").hide();
                $("#Akal").show();
                dataTableAkal();
            }

            function formAkal(id) {

                var semester = $('#Akal').find('[name=semester]').children("option:selected").val();
                $('#tableAkal').DataTable().destroy();
                dataTableAkal(id, semester);
            }

            {{-- Saran --}}

            function formSaran(id) {

                var semester = $('[name=semester]').children("option:selected").val();
                $("#formSaran").show();
                $('#Saran').find('#semester').hide();
                $('#tableSaran').DataTable().destroy();
                dataTableSaran(id, semester);

            }

            function formTambahSaran(id) {

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

            function dataTableSaran(id, semester) {

                $('#tableSaran').DataTable({

                    "ajax": {
                        "url": "http://localhost:8000/wali_kelas/perkembangan/" + id + "/" + semester +
                            "/dataTableSaran",
                        "dataSrc": ""
                    },
                    "columns": [{
                            data: "nis",
                        },
                        {
                            data: "nama_lengkap",
                        },
                        {
                            data: "saran_emosional",
                        },
                        {
                            data: "saran_spiritual",
                        },
                        {
                            data: "saran_akal",
                        },
                        {
                            data: "id_saran",
                            mRender: function(data) {
                                return `<div>
                                <a href="" data-toggle="modal" onclick="editSaran(${data})">
                                    <span class="badge badge-pill gradient-1">
                                    <i class="icon-pencil text-white"></i>
                                    </span>
                                </a>
                                <a href="" data-toggle="modal" onclick="hapusSaran(${data})">
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

            function createSaran(id_siswa, kelas) {
                var semester = $('[name=semester]').val();
                var saran_emosional = $('[name=saran_emosional]').val();
                var saran_spiritual = $('[name=saran_spiritual]').val();
                var saran_akal = $('[name=saran_akal]').val();

                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/createSaran',
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {

                        semester: semester,
                        kelas: kelas,
                        siswa: id_siswa,
                        saran_emosional: saran_emosional,
                        saran_spiritual: saran_spiritual,
                        saran_akal: saran_akal,
                    },
                    success: function(data) {

                        $('[name=saran_emosional]').val("");
                        $('[name=saran_akal]').val("");
                        $('[name=saran_spiritual]').val("");


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

                        $('#tableSaran').DataTable().destroy();
                        formSaran(id_siswa);
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

            function editSaran(id) {
                $('#Saran').find('[name=btnSaran]').empty();

                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/editSaran',
                    type: 'GET',

                    success: function(data) {
                        $.each(data, function(key, value) {
                            saran_emosional = data[key].saran_emosional;
                            saran_spiritual = data[key].saran_spiritual;
                            saran_akal = data[key].saran_akal;

                            $('[name=saran_emosional]').val(saran_emosional);
                            $('[name=saran_spiritual]').val(saran_spiritual);
                            $('[name=saran_akal]').val(saran_akal);

                        });

                        $('#Saran').find('[name=btnSaran]').append(`
                    <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary mb-1" onclick="updateSaran(${id}, ${id_siswa}, ${kelas})">Simpan Data</button>
                    `);
                    }
                });
            }

            function updateSaran(id, id_siswa, kelas) {
                $('#Saran').find('[name=btnSaran]').empty();
                var saran_emosional = $('[name=saran_emosional]').val();
                var saran_spiritual = $('[name=saran_spiritual]').val();
                var saran_akal = $('[name=saran_akal]').val();

                $.ajax({
                    url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/updateSaran',
                    type: 'put',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        saran_emosional: saran_emosional,
                        saran_spiritual: saran_spiritual,
                        saran_akal: saran_akal,
                    },
                    success: function(data) {
                        $('[name=saran_emosional]').val("");
                        $('[name=saran_akal]').val("");
                        $('[name=saran_spiritual]').val("");

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

                        $('#tableSaran').DataTable().destroy();
                        formSaran(id_siswa);
                        $('#Saran').find('[name=btnSaran]').append(`
                    <button type="button" class="btn btn-secondary mb-1" data-dismiss="modal"
                    onclick="CloseForm()">Back</button>
                    <button type="button" class="btn btn-primary mb-1" onclick="createSaran(${id_siswa},${kelas})">Tambah Data</button>
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

            function hapusSaran(id) {
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
                            url: 'http://localhost:8000/wali_kelas/perkembangan/' + id + '/deleteSaran',
                            type: 'GET',
                            success: function(data) {
                                $.each(data, function(key, value) {
                                    id_siswa = data[key].siswa;
                                });
                                Swal.fire(
                                    'Delete!',
                                    'Data telah berhasil dihapus',
                                    'success'
                                )

                                $('#tableSaran').DataTable().destroy();
                                formSaran(id_siswa);
                            }
                        })
                    }
                })

            }
        </script>
    @endsection
