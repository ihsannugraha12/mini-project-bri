@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/asisten">Asisten</a></li>
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
                        <form method="post" action="/asisten">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first() }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="id_asisten" class="form-label">Id Asisten</label>
                                <input type="text" class="form-control" id="id_asisten" name="id_asisten"
                                    value="{{ old('id_asisten') }}">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value = "{{ old('email') }}">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="role_id" class="form-label">Role</label>
                                <select class="form-select" id="role_id" name="role_id">
                                    <option selected disabled>Pilih Role</option>
                                    @foreach ($roles as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->role_name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="join_date" class="form-label">Tanggal Bergabung</label>
                                <input type="date" class="form-control" id="join_date" name="join_date"
                                    value="{{ old('join_date') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                            <a href="/asisten" class="btn btn-info">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
