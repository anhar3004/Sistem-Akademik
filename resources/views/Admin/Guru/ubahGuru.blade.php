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
                    <div class="card">
                        <div class="card-body ">
                            <h1 class="card-title">Ubah Guru</h1>
                            <br>
                            <div class="basic-form">
                                <form action="/guru/{{ $guru->id_guru }}/update" method="post" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">NIP
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-username" name="nip"
                                                placeholder="" value="{{ $guru->nip }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-email">Nama Lengkap
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-email" name="nama_lengkap"
                                                placeholder="" value="{{ $guru->nama_lengkap }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-password">Tempat Lahir
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-password" name="tempat_lahir"
                                                placeholder="" value="{{ $guru->tempat_lahir }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggal Lahir
                                        </label>
                                        <div class="col-lg-6 input-group">
                                            <input type="text" class="form-control mydatepicker" placeholder=""
                                                name="tanggal_lahir"  value="{{ $guru->tanggal_lahir }}">
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
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="jenis_kelamin" value="Laki-laki" @if ($guru->jenis_kelamin == "Laki-laki") checked @endif> Laki-laki</label>
                                                <input type="radio" name="jenis_kelamin" value="Perempuan" @if ($guru->jenis_kelamin == "Perempuan") checked @endif> Perempuan</label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="val-suggestions" name="alamat"
                                                rows="5" placeholder="">{{ $guru->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">No Handphone
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" id="val-confirm-password"
                                                name="no_hp" placeholder="" value="{{ $guru->no_hp }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Email
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" id="val-confirm-password"
                                                name="email" placeholder="" value="{{ $guru->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Foto
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="foto" value="{{ $guru->foto }}">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
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


@endsection
