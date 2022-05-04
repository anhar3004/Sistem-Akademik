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
                            <h1 class="title-1 text-white">Data Nilai Siswa</h1>
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

                                    {{--  <div class="form-group col-md-2">
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">Pilih Pelajaran</option>
                                            <option>Kelas 1</option>
                                            <option>Kelas 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">Pilih Kelas</option>
                                            <option>Kelas 1</option>
                                            <option>Kelas 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">Pilih Semester</option>
                                            <option>Kelas 1</option>
                                            <option>Kelas 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">Pilih Periode</option>
                                            <option>Kelas 1</option>
                                            <option>Kelas 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <button type="button" class="btn btn-primary">Filter</button>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <button type="button" class="btn btn-primary">Filter dan Cetak Data</button>
                                    </div>  --}}
                                    <div class="form-group col-md-12">
                                        <button type="button" class="btn btn-primary" onclick="formTambah()">Tambah Data</button>
                                    </div>
                                </div>
                                <table
                                    class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Kelas</th>
                                            <th rowspan="2">Kode Mapel</th>
                                            <th rowspan="2">Mata Pelajaran</th>
                                            <th rowspan="2">Lihat Nilai Siswa</th>
                                            <th colspan="2">Input Nilai </th>
                                        </tr>
                                        <tr>
                                            <th> Pengetahuan</th>
                                            <th> Keterampilan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kelas 1</td>
                                            <td>MPL001</td>
                                            <td>Bahasa Indonesia</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
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
                                {{--  <div class="row">
                                    <div class="form-group col-md-12">
                                        <button type="button" class="btn btn-primary" onclick="formTambah()">Input Nilai </button>
                                        <button type="button" class="btn btn-warning" onclick="formTambah()">Input Nilai Tugas</button>
                                    </div>
                                </div>  --}}
                                <table
                                    class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th rowspan="3">No</th>
                                            <th rowspan="3">NIS</th>
                                            <th rowspan="3">Nama</th>
                                            <th colspan="14">Aspek Pengetahuan</th>
                                            <th rowspan="3">Action</th>
                                        </tr>
                                        <tr>
                                            <th colspan="8">Penilaian Harian (Tes Tulis, Tes Lisan, Tugas)</th>
                                            <th rowspan="3"> RPH</th>
                                            <th rowspan="3"> PTS</th>
                                            <th rowspan="2">UTS</th>
                                            <th rowspan="2">HPA</th>
                                            <th rowspan="2">PRE</th>
                                            <th rowspan="2">Deskripsi</th>

                                        </tr>
                                        <tr>
                                            <th>  1</th>
                                            <th>  2</th>
                                            <th>  3</th>
                                            <th>  4</th>
                                            <th>  5</th>
                                            <th>  6</th>
                                            <th>  7</th>
                                            <th>  8</th>
                                        </tr>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1564654</td>
                                            <td>Anggita Putri</td>
                                            <td>70</td>
                                            <td>80</td>
                                            <td>85</td>
                                            <td>81</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>70</td>
                                            <td>80</td>
                                            <td>85</td>
                                            <td>81</td>
                                            <td>B</td>
                                            <td>Ananda Anggita Putri memiliki kemampuan baik dalam mengikuti mata pelaran Bahasa Indonesia</td>
                                            <td>-</td>
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
                                {{--  <div class="row">
                                    <div class="form-group col-md-12">
                                        <button type="button" class="btn btn-primary" onclick="formTambah()">Input Nilai </button>
                                        <button type="button" class="btn btn-warning" onclick="formTambah()">Input Nilai Tugas</button>
                                    </div>
                                </div>  --}}
                                <table
                                    class="table table-striped table-bordered table-hover text-center" id="table">
                                    <thead>
                                        <tr>
                                            <th rowspan="3">No</th>
                                            <th rowspan="3">NIS</th>
                                            <th rowspan="3">Nama</th>
                                            <th colspan="10">Aspek Keterampilan</th>
                                            <th rowspan="3">Action</th>
                                        </tr>
                                        <tr>
                                            <th colspan="8"> Keterampilan</th>
                                            <th rowspan="2">HPA</th>
                                            <th rowspan="2">PRE</th>
                                            <th rowspan="2">Deskripsi</th>

                                        </tr>
                                        <tr>
                                            <th>  1</th>
                                            <th>  2</th>
                                            <th>  3</th>
                                            <th>  4</th>
                                            <th>  5</th>
                                            <th>  6</th>
                                            <th>  7</th>
                                            <th>  8</th>
                                        </tr>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1564654</td>
                                            <td>Anggita Putri</td>
                                            <td>70</td>
                                            <td>80</td>
                                            <td>85</td>
                                            <td>81</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>81</td>
                                            <td>B</td>
                                            <td>Ananda Anggita Putri memiliki kemampuan baik dalam mengikuti mata pelaran Bahasa Indonesia</td>
                                            <td>-</td>
                                        </tr>
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
                                <h5 class="modal-title">Tambah Nilai</h5>
                                <button type="button" class="close" data-dismiss="modal" onclick="closeModal()"><span>&times;</span>
                                </button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-lg-12">
                                                <label>Kode Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Nama Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Pengajar</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Kelas</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Siswa</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Periode</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Semester</label>
                                                <select id="inputState" class="form-control">
                                                    <option>Semester 1</option>
                                                    <option>Semester 2</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Tugas</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>UTS</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>UAS</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Angka Pengetahuan</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Predikat Pengetahuan</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Deskripsi Pengetahuan</label>
                                                <textarea class="form-control" id="val-suggestions" name="alamat" rows="5" placeholder="" readonly></textarea>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Angka Keterampilan</label>
                                                <input type="text" class="form-control" placeholder="" readonly>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Predikat Keterampilan</label>
                                                <input type="text" class="form-control" placeholder="" >
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Deskripsi Keterampilan</label>
                                                <textarea class="form-control" id="val-suggestions" name="alamat" rows="5" placeholder="" readonly></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Close</button>
                                    <button type="button" class="btn btn-primary">Tambah Data</button>
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
                                <h5 class="modal-title">Ubah Mengajar</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <div class="basic-form">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Kode Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Nama Pelajaran</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Kelas</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected="selected">Pilih Kelas</option>
                                                    <option>Kelas 1</option>
                                                    <option>Kelas 2</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Pengajar</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected="selected">Pilih Pengajar</option>
                                                    <option>Anhar Hadhitya</option>
                                                    <option>Supriatna</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Simpan Data</button>
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
    <script>
        function formTambah() {
            $("#modalTambah").modal('show');

        }

        function closeModal() {
            $("#modalEdit").modal('hide');
            $("#modalTambah").modal('hide');
        }
    </script>
@endsection
