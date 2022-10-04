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
                            <h1 class="title-1 text-white">Biodata Guru</h1>
                            <br>
                            <div class="progress" style="height: 6px">
                                <div class="progress-bar " style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="detailGuru">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card ">
                            <div class="card-body ">
                                @foreach ($guru as $g)
                                    <div class="row" id="detail">
                                        <div class=" col-md-2 Text-center">
                                            <h5 class="title-1 ">NiP</h5>
                                        </div>
                                        <h5 class="title-1 ">:</h5>
                                        <div class="col-md-3 Text-center">
                                            <h5 class="title-1 ">{{ $g->nip }} </h5>
                                        </div>
                                        <div class="col-md-2 Text-center">
                                            <h5 class="title-1 ">Jenis Kelamin</h5>
                                        </div>
                                        <h5 class="title-1 ">:</h5>
                                        <div class="col-md-2 ">
                                            <h5 class="title-1 ">{{ $g->jenis_kelamin }} </h5>
                                        </div>
                                        <div class=" col-md-2 Text-center">
                                        </div>
                                        <div class="col-md-2 ">
                                            <h5 class="title-1 ">Nama</h5>
                                        </div>
                                        <h5 class="title-1 "> :</h5>
                                        <div class="col-md-3 ">
                                            <h5 class="title-1 ">{{ $g->nama_lengkap }}</h5>
                                        </div>
                                        <div class="col-md-2 ">
                                            <h5 class="title-1 ">No Handphone</h5>
                                        </div>
                                        <h5 class="title-1 "> :</h5>
                                        <div class="col-md-2 ">
                                            <h5 class="title-1 ">{{ $g->no_hp }}</h5>
                                        </div>
                                        <div class=" col-md-2 Text-center">
                                        </div>
                                        <div class="col-md-2 ">
                                            <h5 class="title-1 ">Tempat Lahir</h5>
                                        </div>
                                        <h5 class="title-1 "> :</h5>
                                        <div class="col-md-3 ">
                                            <h5 class="title-1 ">{{ $g->tempat_lahir }}</h5>
                                        </div>
                                        <div class="col-md-2 ">
                                            <h5 class="title-1 ">Email</h5>
                                        </div>
                                        <h5 class="title-1 "> :</h5>
                                        <div class="col-md-4 ">
                                            <h5 class="title-1 ">{{ $g->email }}</h5>
                                        </div>
                                        {{-- <div class=" col-md-2 Text-center">
                                        </div> --}}
                                        <div class="col-md-2 ">
                                            <h5 class="title-1 ">Tanggal Lahir</h5>
                                        </div>
                                        <h5 class="title-1 "> :</h5>
                                        <div class="col-md-3 ">
                                            <h5 class="title-1 ">{{ $g->tanggal_lahir }}</h5>
                                        </div>
                                        <div class="col-md-2 ">
                                            <h5 class="title-1 ">Alamat</h5>
                                        </div>
                                        <h5 class="title-1 "> :</h5>
                                        <div class="col-md-4 ">
                                            <h5 class="title-1 ">{{ $g->alamat }}</h5>
                                        </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="buttonEdit">
                <div class="col-md-12 ">
                    <div class="card ">
                        <br>
                        <div class="form-group col-md-12">
                            <button type="button" class="btn btn-primary" href=""
                                @foreach ($guru as $g) onclick="formEdit({{ $g->id_guru }})">Edit Biodata @endforeach
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- #/ container -->
        <div class="row" id="formEdit">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-body ">
                        <h1 class="card-title">Edit Biodata</h1>
                        <div class="basic-form">
                            <form action="/guru/tambah" method="post" class="form-horizontal" id="form">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">NIP
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="nip"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Nama Lengkap
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val_text" name="nama_lengkap"
                                            placeholder="" onkeyup="Kapitalis()" onchange="Username()">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-password">Tempat Lahir
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-password" name="tempat_lahir"
                                            placeholder="" onkeyup="Kapitalis()">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggal Lahir
                                    </label>
                                    <div class="col-lg-6 input-group">
                                        <input type="text" class="form-control mydatepicker" placeholder=""
                                            name="tanggal_lahir">
                                        <span class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-calendar-check"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Jenis Kelamin
                                    </label>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="jenis_kelamin" value="Perempuan"
                                                    id="perempuan"> Perempuan
                                            </label>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="jenis_kelamin" value="Laki-laki"
                                                    id="laki-laki">
                                                Laki-laki
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" id="val-suggestions" name="alamat" rows="5" placeholder=""
                                            onkeyup="Kapitalis()"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-confirm-password">No Handphone
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" id="val-confirm-password"
                                            name="no_hp" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-confirm-password">Email
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" id="val-confirm-password"
                                            name="email" placeholder="" onkeyup="Kapitalis()">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-confirm-password">Foto
                                    </label>
                                    <div class="col-lg-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto"
                                                value="">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="button" class="btn btn-warning" onclick="back()">Back</button>
                                        <button type="button" class="btn btn-primary" id="submit"
                                            @foreach ($guru as $g) onclick="update({{ $g->id_guru }})">Submit</button> @endforeach
                                            </div>
                                    </div>
                            </form>
                            {{-- @endforeach --}}
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
        });

        function detail() {

            $.ajax({
                url: 'http://localhost:8000/guru/biodata/detail',
                type: 'GET',
                success: function(data) {


                    $.each(data, function(key, value) {
                        id_guru = data[key].id_guru;
                        nip = data[key].nip;
                        nama_lengkap = data[key].nama_lengkap;
                        tempat_lahir = data[key].tempat_lahir;
                        tanggal_lahir = data[key].tanggal_lahir;
                        jenis_kelamin = data[key].jenis_kelamin;
                        alamat = data[key].alamat;
                        no_hp = data[key].no_hp;
                        email = data[key].email;
                        foto = data[key].foto;

                        {{-- if (foto == null) {
                                foto = "-";
                            } --}}

                        $('#detail').append(`
                            <div class=" col-md-2 Text-center">
                                <h5 class="title-1 ">NiP</h5>
                            </div>
                            <h5 class="title-1 ">:</h5>
                            <div class="col-md-3 Text-center">
                                <h5 class="title-1 ">${nip} </h5>
                            </div>
                            <div class="col-md-2 Text-center">
                                <h5 class="title-1 ">Jenis Kelamin</h5>
                            </div>
                            <h5 class="title-1 ">:</h5>
                            <div class="col-md-2 ">
                                <h5 class="title-1 ">${jenis_kelamin} </h5>
                            </div>
                            <div class=" col-md-2 Text-center">
                            </div>
                            <div class="col-md-2 ">
                                <h5 class="title-1 ">Nama</h5>
                            </div>
                            <h5 class="title-1 "> :</h5>
                            <div class="col-md-3 ">
                                <h5 class="title-1 ">${nama_lengkap}</h5>
                            </div>
                            <div class="col-md-2 ">
                                <h5 class="title-1 ">No Handphone</h5>
                            </div>
                            <h5 class="title-1 "> :</h5>
                            <div class="col-md-2 ">
                                <h5 class="title-1 ">${no_hp}</h5>
                            </div>
                            <div class=" col-md-2 Text-center">
                            </div>
                            <div class="col-md-2 ">
                                <h5 class="title-1 ">Tempat Lahir</h5>
                            </div>
                            <h5 class="title-1 "> :</h5>
                            <div class="col-md-3 ">
                                <h5 class="title-1 ">${tempat_lahir}</h5>
                            </div>
                            <div class="col-md-2 ">
                                <h5 class="title-1 ">Email</h5>
                            </div>
                            <h5 class="title-1 "> :</h5>
                            <div class="col-md-4 ">
                                <h5 class="title-1 ">${email}</h5>
                            </div>
                            <div class="col-md-2 ">
                                <h5 class="title-1 ">Tanggal Lahir</h5>
                            </div>
                            <h5 class="title-1 "> :</h5>
                            <div class="col-md-3 ">
                                <h5 class="title-1 ">${tanggal_lahir}</h5>
                            </div>
                            <div class="col-md-2 ">
                                <h5 class="title-1 ">Alamat</h5>
                            </div>
                            <h5 class="title-1 "> :</h5>
                            <div class="col-md-4 ">
                                <h5 class="title-1 ">${alamat}</h5>
                            </div>`);

                    });
                }
            })
        }

        function back() {
            $('#formEdit').hide();
            $('#detailGuru').show();
            $('#buttonEdit').show();
        }

        function formEdit(id) {
            $('#formEdit').show();
            $('#detailGuru').hide();
            $('#buttonEdit').hide();

            $.ajax({
                url: 'http://localhost:8000/guru/biodata/' + id + '/edit',
                type: 'GET',

                success: function(data) {


                    $.each(data, function(key, value) {
                        id_guru = data[key].id_guru;
                        nip = data[key].nip;
                        nama_lengkap = data[key].nama_lengkap;
                        username = data[key].username;
                        tempat_lahir = data[key].tempat_lahir;
                        tanggal_lahir = data[key].tanggal_lahir;
                        jenis_kelamin = data[key].jenis_kelamin;
                        alamat = data[key].alamat;
                        no_hp = data[key].no_hp;
                        email = data[key].email;
                        foto = data[key].foto;

                        $('[name=nip]').val(nip);
                        $('[name=nama_lengkap]').val(nama_lengkap);
                        $('[name=username]').val(username);
                        $('[name=tempat_lahir]').val(tempat_lahir);
                        $('[name=tanggal_lahir]').val(tanggal_lahir);

                        if (jenis_kelamin == "Laki-laki") {
                            $('#laki-laki').attr('checked', 'true').val(jenis_kelamin);

                        } else {
                            $('#perempuan').attr('checked', 'true').val(jenis_kelamin);
                        }

                        $('[name=alamat]').val(alamat);
                        $('[name=no_hp]').val(no_hp);
                        $('[name=email]').val(email);
                        $('[name=foto]').val(foto);

                    });
                }
            });
        }

        function update(id) {
            var nip = $('[name=nip]').val();
            var nama_lengkap = $('[name=nama_lengkap]').val();
            var tempat_lahir = $('[name=tempat_lahir]').val();
            var tanggal_lahir = $('[name=tanggal_lahir]').val();
            var jenis_kelamin = $('[name=jenis_kelamin]:checked').val();
            var alamat = $('[name=alamat]').val();
            var no_hp = $('[name=no_hp]').val();
            var email = $('[name=email]').val();
            var foto = $('[name=foto]').val();


            $.ajax({
                url: 'http://localhost:8000/guru/biodata/' + id + '/update',
                type: 'put',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    nip: nip,
                    nama_lengkap: nama_lengkap,
                    tempat_lahir: tempat_lahir,
                    tanggal_lahir: tanggal_lahir,
                    jenis_kelamin: jenis_kelamin,
                    alamat: alamat,
                    no_hp: no_hp,
                    email: email,
                    foto: foto,
                },
                success: function(data) {

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

                    $('#formEdit').hide();
                    $('#detailGuru').show();
                    $('#buttonEdit').show();
                    $('#detail').empty();
                    detail();


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
    </script>
@endsection
