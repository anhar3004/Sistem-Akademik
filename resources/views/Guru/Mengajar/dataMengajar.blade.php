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
                        <div class="card-body" id="card_body">
                            <h1 class="title-1 text-white">Data Mengajar</h1>
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
                                <div class="col-md-12">

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
    </div>
    <!--**********************************
                                        Content body end
                                    ***********************************-->

    <script type="text/javascript">
        $(document).ready(function() {
            event.preventDefault();
            $('#formEdit').hide();
            dataTable();
        });

        function dataTable() {
            $('#table').DataTable({

                "ajax": {
                    "url": "http://localhost:8000/jadwalMengajar/dataTable",
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
                    }
                ]
            })
        }
    </script>
@endsection
