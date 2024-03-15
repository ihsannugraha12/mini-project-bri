@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/materi">Materi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
            </ol>
        </nav>
        <h4>Tambah Data Materi</h4>

        <div class="row">
            <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card w-100">
                    <div class="card-header">
                        Form Tambah Data
                    </div>
                    <div class="card-body">
                        <form method="post" action="/materi">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first() }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="materi" class="form-label">Materi</label>
                                <input type="text" class="form-control" id="materi" name="materi"
                                    value="{{ old('materi') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                            <a href="/materi" class="btn btn-info">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
