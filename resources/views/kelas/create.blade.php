@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"> <a href="/kelas">Kelas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
            </ol>
        </nav>
        <h4>Tambah Data Asisten</h4>

        <div class="row">
            <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card w-100">
                    <div class="card-header">
                        Form Tambah Data
                    </div>
                    <div class="card-body">
                        <form method="post" action="/kelas">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first() }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    value="{{ old('jurusan') }}">
                            </div>
                            <div class="mb-3">
                                <label for="fakultas" class="form-label">Fakultas</label>
                                <input type="text" class="form-control" id="fakultas" name="fakultas"
                                    value="{{ old('fakultas') }}">
                            </div>
                            <div class="mb-3">
                                <label for="tingkat" class="form-label">Tingkat</label>
                                <input type="text" class="form-control" id="tingkat" name="tingkat"
                                    value = "{{ old('tingkat') }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"
                                    value = "{{ old('nama_kelas') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                            <a href="/kelas" class="btn btn-secondary">Kembali</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
