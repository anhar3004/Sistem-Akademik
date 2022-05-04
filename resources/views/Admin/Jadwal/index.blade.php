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
                        <div class="card-body" id="card_body">
                            <h1 class="title-1 text-white">Data Jadwal Pelajaran</h1>
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
                                <div class="col-md-9">
                                    {{ csrf_field() }}
                                    <form action="">
                                        <div class="row">
                                            <div class="form-group col-md-2 text-center">
                                                <select id="inputState" class="form-control text-center">
                                                    <option selected>Plih Kelas</option>
                                                    @foreach ($kelas as $k)
                                                        <option value="{{ $k->id_kelas }}">Kelas {{ $k->kelas }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2 text-center">
                                                <select id="inputState" class="form-control text-center">
                                                    <option>Plih Semester</option>
                                                    <option>Semester 1</option>
                                                    <option>Semester 2</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-8 ">
                                                <button type="button" class="btn btn-primary">Cetak Jadwal</button>
                                                <button type="button" class="btn btn-primary">Lihat Jadwal</button>
                                            </div>

                                            {{-- <div class="form-group col-md-2">
                                                <button type="button" class="btn btn-primary">Cetak Semua Data</button>
                                            </div> --}}
                                        </div>
                                    </form>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-primary" id="tampil" onclick="formTambah()">Tambah Data
                                    </button>
                                </div>
                                <table class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>semester</th>
                                            <th>Hari</th>
                                            <th>Jam Ke</th>
                                            <th>Jam Awal</th>
                                            <th>Jam Akhir</th>
                                            <th>Jumlah Menit</th>
                                            <th>Pelajaran</th>
                                            <th>Pengajar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    {{-- <tbody>
                                        @foreach ($jadwal as $j)
                                            <tr>
                                                <td>Kelas {{ $j->kelas }}</td>
                                                <td>{{ $j->hari }}</td>
                                                <td>{{ $j->jam_ke }}</td>
                                                <td>{{ $j->jam_awal }}</td>
                                                <td>{{ $j->jam_akhir }}</td>
                                                <td>{{ $j->jumlah_menit }}</td>
                                                <td>{{ $j->nama_mapel }}</td>
                                                <td>{{ $j->nama_lengkap }}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="" data-toggle="modal" data-target="#modalEdit">
                                                            <span class="badge badge-pill gradient-3">
                                                                <i class="icon-pencil text-white"></i>
                                                            </span>
                                                        </a>
                                                        <a href="" onclick="return confirm('apakah yakin akan di hapus ?')">
                                                            <span class="badge badge-pill gradient-2">
                                                                <i class="icon-trash text-white"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody> --}}
                                </table>

                                {{-- <div class="pull-right">
                                    {{ $jadwal->links() }}
                                </div> --}}
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
                                <h5 class="modal-title" id="modal-title">Tambah Data Jadwal</h5>
                                <button type="button" class="close" onclick="closeModal()"><span>&times;</span>
                                </button>
                            </div>
                            <form method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Semester</label>
                                                <select id="inputState" class="form-control" name="semester">
                                                    <option value="">
                                                        <-- Silahkan Plih Semester -->
                                                    </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Kelas</label>
                                                <select id="inputState" class="form-control"
                                                    onchange="tampilDataPelajaran()" name="kelas">
                                                    <option value="">
                                                        <-- Silahkan Plih Kelas -->
                                                    </option>
                                                    @foreach ($kelas as $k)
                                                        <option value="{{ $k->id_kelas }}"> Kelas {{ $k->kelas }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Pelajaran</label>
                                                <select id="inputState" class="form-control" name="mengajar"
                                                    onchange="tampilDataPengajar()">
                                                    <option value="">
                                                        <-- Silahkan Plih Pelajaran -->
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Pengajar</label>
                                                <div>
                                                    <input type="text" class="form-control" name="pengajar" readonly
                                                        placeholder="Nama Pengajar">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Hari</label>
                                                <select id="inputState" class="form-control" name="hari">
                                                    <option value="">
                                                        <-- Pilih Hari -->
                                                    </option>
                                                    <option>Senin</option>
                                                    <option>Selasa</option>
                                                    <option>Rabu</option>
                                                    <option>Kamis</option>
                                                    <option>Jumat</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Jam ke</label>
                                                <select id="inputState" class="form-control" name="jam_ke">
                                                    <option value="">
                                                        <-- Pilih Jam Ke -->
                                                    </option>
                                                    @for ($a = 1; $a <= 10; $a++)
                                                        <option>{{ $a }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Jam Awal</label>
                                                <select id="jam_awal" class="form-control" name="jam_awal">
                                                    <option value="">
                                                        <-- Pilih Jam Awal -->
                                                    </option>
                                                    <option value="08:00">08.00</option>
                                                    <option value="08:30">08.30</option>
                                                    <option value="09:00">09.00</option>
                                                    <option value="09:30">09.30</option>
                                                    <option value="10:00">10.00</option>
                                                    <option value="10:30">10.30</option>
                                                    <option value="11:00">11.00</option>
                                                    <option value="11:30">11.30</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Jam Akhir</label>
                                                <select id="jam_akhir" class="form-control" name="jam_akhir"
                                                    onchange="jumlahMenit()">
                                                    <option value="">
                                                        <-- Pilih Jam Akhir -->
                                                    </option>
                                                    <option value="08:00">08.00</option>
                                                    <option value="08:30">08.30</option>
                                                    <option value="09:00">09.00</option>
                                                    <option value="09:30">09.30</option>
                                                    <option value="10:00">10.00</option>
                                                    <option value="10:30">10.30</option>
                                                    <option value="11:00">11.00</option>
                                                    <option value="11:30">11.30</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Jumlah Menit </label>
                                                <div>
                                                    <input type="text" class="form-control" id="jumlah"
                                                        name="jumlah_menit" readonly placeholder="Jumlah Menit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                                    <button id="button" type="button" class="btn btn-primary" onclick="create()">Tambah
                                        Data</button>
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
                <!-- Modal Tambah-->
                <div class="modal fade" id="modalEdit">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal-title">Ubah Data Jadwal</h5>
                                <button type="button" class="close" onclick="closeModal()"><span>&times;</span>
                                </button>
                            </div>
                            <form method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Semester</label>
                                                <select id="inputState" class="form-control" name="semester">
                                                    <option>
                                                        <-- Silahkan Plih Semester -->
                                                    </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Kelas</label>
                                                <select id="inputState" class="form-control"
                                                    onchange="tampilDataPelajaran()" name="kelas">
                                                    <option>
                                                        <-- Silahkan Plih Kelas -->
                                                    </option>
                                                    @foreach ($kelas as $k)
                                                        <option value="{{ $k->id_kelas }}"> Kelas {{ $k->kelas }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Pelajaran</label>
                                                <select id="inputState" class="form-control" name="mengajar"
                                                    onchange="tampilDataPengajar()">
                                                    <option>
                                                        <-- Silahkan Plih Pelajaran -->
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Pengajar</label>
                                                <div>
                                                    <input type="text" class="form-control" name="pengajar" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Hari</label>
                                                <select id="inputState" class="form-control" name="hari">
                                                    <option>Pilih Hari</option>
                                                    <option>Senin</option>
                                                    <option>Selasa</option>
                                                    <option>Rabu</option>
                                                    <option>Kamis</option>
                                                    <option>Jumat</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Jam ke</label>
                                                <select id="inputState" class="form-control" name="jam_ke">
                                                    <option>Pilih Jam Ke</option>
                                                    @for ($a = 1; $a <= 10; $a++)
                                                        <option>{{ $a }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Jam Awal</label>
                                                <select id="jam_awal" class="form-control" name="jam_awal">
                                                    <option>Pilih Jam Awal</option>
                                                    <option value="08:00">08.00</option>
                                                    <option value="08:30">08.30</option>
                                                    <option value="09:00">09.00</option>
                                                    <option value="09:30">09.30</option>
                                                    <option value="10:00">10.00</option>
                                                    <option value="10:30">10.30</option>
                                                    <option value="11:00">11.00</option>
                                                    <option value="11:30">11.30</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Jam Akhir</label>
                                                <select id="jam_akhir" class="form-control" name="jam_akhir"
                                                    onchange="jumlahMenit()">
                                                    <option value="0">Pilih Jam Akhir</option>
                                                    <option value="08:00">08.00</option>
                                                    <option value="08:30">08.30</option>
                                                    <option value="09:00">09.00</option>
                                                    <option value="09:30">09.30</option>
                                                    <option value="10:00">10.00</option>
                                                    <option value="10:30">10.30</option>
                                                    <option value="11:00">11.00</option>
                                                    <option value="11:30">11.30</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Jumlah Menit </label>
                                                <div>
                                                    <input type="text" class="form-control" id="jumlah"
                                                        name="jumlah_menit" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                                    <button id="button" type="button" class="btn btn-primary" onclick="update(id_jadwal)">Ubah
                                        Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
    </div>

    {{-- <!--**********************************
    Content body end
                        ***********************************--> --}}


    <script type="text/javascript">
        $(document).ready(function() {
            event.preventDefault();

            dataTable();
        });

        function formTambah() {
            $("#modalTambah").modal('show');
        }

        function formEdit(id) {

            $.ajax({
                url: 'http://localhost:8000/jadwal/' + id + '/ubahJadwal',
                type: 'GET',

                success: function(data) {
                    $("#modalEdit").modal('show');
                    {{-- $("#modal-title").contents().last()[0].textContent='Ubah Jadwal Pelajaran'; --}}

                    $.each(data, function(key, value) {
                        id_jadwal = data[key].id_jadwal;
                        semester = data[key].semester;
                        kelas = data[key].kelas;
                        id_mengajar = data[key].id_mengajar;

                        pengajar = data[key].nama_lengkap;
                        hari = data[key].hari;
                        jam_ke = data[key].jam_ke;
                        jam_awal = data[key].jam_awal;
                        jam_akhir = data[key].jam_akhir;
                        jumlah_menit = data[key].jumlah_menit;


                        $('#modalEdit').find('[name=semester]').val(semester);
                        $('#modalEdit').find('[name=kelas]').val(kelas);
                        tampilDataPelajaran(id_mengajar);
                        $('#modalEdit').find('[name=hari]').val(hari);
                        $('#modalEdit').find('[name=jam_ke]').val(jam_ke);
                        $('#modalEdit').find('[name=jam_awal]').val(jam_awal);
                        $('#modalEdit').find('[name=jam_akhir]').val(jam_akhir);
                        $('#modalEdit').find('[name=jumlah_menit]').val(jumlah_menit);
                    });
                }
            });
        }

        function update(id){
            var mengajar = $('#modalEdit').find('[name=mengajar]').val();
            var semester = $('#modalEdit').find('[name=semester]').val();
            var hari = $('#modalEdit').find('[name=hari]').val();
            var jam_ke = $('#modalEdit').find('[name=jam_ke]').val();
            var jam_awal = $('#modalEdit').find('[name=jam_awal]').val();
            var jam_akhir = $('#modalEdit').find('[name=jam_akhir]').val();
            var jumlah_menit = $('#modalEdit').find('[name=jumlah_menit]').val();

            console.log(semester);

            $.ajax({
                url: 'http://localhost:8000/jadwal/'+ id +'/update',
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    mengajar: mengajar,
                    semester: semester,
                    hari: hari,
                    jam_ke: jam_ke,
                    jam_awal: jam_awal,
                    jam_akhir: jam_akhir,
                    jumlah_menit: jumlah_menit,
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

        function closeModal() {
            $("#modalEdit").modal('hide');
            $("#modalTambah").modal('hide');
        }

        function jumlahMenit() {
            var jam_akhir = document.getElementById("jam_akhir").value;
            var jam_awal = document.getElementById("jam_awal").value;
            var date = "September 19 2020";

            //merubah ke miliDetik
            var akhir = new Date(date.concat(" ", jam_akhir)).getTime();
            var awal = new Date(date.concat(" ", jam_awal)).getTime();

            var selisih = akhir - awal;
            var selisihDetik = selisih / 1000;
            var selisihMenit = selisihDetik / 60;

            document.getElementById("jumlah").value = selisihMenit;
        }

        function tampilDataPelajaran(id_mengajar) {
            $('#modalTambah').find('[name=mengajar]').children("option").remove();
            $('#modalEdit').find('[name=mengajar]').children("option").remove();
            a = $('#modalTambah').find('[name=kelas]').children("option:selected").val();
            b = $('#modalEdit').find('[name=kelas]').children("option:selected").val();
            if (id = a) {
                $.ajax({
                    url: 'http://localhost:8000/jadwal/' + id + '/dataPelajaran',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#modalTambah').find('[name=mengajar]').append(
                            '<option value="" >' + '<-- Silahkan Pilih Pelajaran -->' + '</option>'
                        );
                        $.each(data, function(key, value) {
                            nama_mapel = data[key].nama_mapel;
                            mengajar = data[key].id_mengajar;

                            $('#modalTambah').find('[name=mengajar]').append(

                                '<option value=' + mengajar + '>' + nama_mapel + '</option>'
                            );
                            tampilDataPengajar();
                        });
                    }
                });
            }
            if (id = b) {
                $.ajax({
                    url: 'http://localhost:8000/jadwal/' + id + '/dataPelajaran',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $.each(data, function(key, value) {
                            nama_mapel = data[key].nama_mapel;
                            mengajar = data[key].id_mengajar;
                            $('#modalEdit').find('[name=mengajar]').append(
                                '<option value=' + mengajar + '>' + nama_mapel + '</option>'
                            );
                            $('#modalEdit').find('[name=mengajar]').val(id_mengajar);
                            tampilDataPengajar();
                        });
                    }
                });
            };
        }

        function tampilDataPengajar() {
            a = $('#modalTambah').find('[name=mengajar]').children("option:selected").val();
            b = $('#modalEdit').find('[name=mengajar]').children("option:selected").val();

            if (id = a) {
                $.ajax({
                    url: 'http://localhost:8000/jadwal/' + id + '/dataPengajar',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $.each(data, function(key, value) {
                            nama_guru = data[key].nama_lengkap;
                            $('#modalTambah').find('[name=pengajar]').val(nama_guru);
                        });
                    }
                });
            }

            if (id = b) {
                $.ajax({
                    url: 'http://localhost:8000/jadwal/' + id + '/dataPengajar',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $.each(data, function(key, value) {
                            nama_guru = data[key].nama_lengkap;

                            $('#modalEdit').find('[name=pengajar]').val(nama_guru);
                        });
                    }
                });
            }
        }

        function dataTable() {
            $('#table').DataTable({

                "ajax": {
                    "url": "http://localhost:8000/jadwal/daftar",
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
                        data: "semester"
                    },
                    {
                        data: "hari"
                    },
                    {
                        data: "jam_ke"
                    },
                    {
                        data: "jam_awal."
                    },
                    {
                        data: "jam_akhir"
                    },
                    {
                        data: "jumlah_menit"
                    },
                    {
                        data: "nama_mapel"
                    },
                    {
                        data: "nama_lengkap"
                    },
                    {
                        data: "id_jadwal",
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

        function create() {
            var mengajar = $('[name=mengajar]').val();
            var semester = $('[name=semester]').val();
            var hari = $('[name=hari]').val();
            var jam_ke = $('[name=jam_ke]').val();
            var jam_awal = $('[name=jam_awal]').val();
            var jam_akhir = $('[name=jam_akhir]').val();
            var jumlah_menit = $('[name=jumlah_menit]').val();

            $.ajax({
                url: 'http://localhost:8000/jadwal/create',
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    mengajar: mengajar,
                    semester: semester,
                    hari: hari,
                    jam_ke: jam_ke,
                    jam_awal: jam_awal,
                    jam_akhir: jam_akhir,
                    jumlah_menit: jumlah_menit,
                },
                success: function(data) {
                    $('[name=semester]').val("");
                    $('[name=kelas]').val("");
                    $('[name=mengajar]').val("");
                    $('[name=pengajar]').val("");
                    $('[name=hari]').val("");
                    $('[name=jam_ke]').val("");
                    $('[name=jam_awal]').val("");
                    $('[name=jam_akhir]').val("");
                    $('[name=jumlah_menit]').val("");



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
                        url: 'http://localhost:8000/jadwal/' + id + '/delete',
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
