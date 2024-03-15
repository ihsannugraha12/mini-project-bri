@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/asisten">Asisten</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
            </ol>
        </nav>
        <h4>Edit Data Asisten</h4>

        <div class="row">
            <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card w-100">
                    <div class="card-header">
                        Form Edit Data
                    </div>
                    <div class="card-body">
                        <form method="post" action="/asisten/{{ $user['id'] }}">
                            @csrf
                            @method('PUT')
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first() }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $user['name'] }}">
                            </div>
                            <div class="mb-3">
                                <label for="id_asisten" class="form-label">ID Asisten</label>
                                <input type="text" class="form-control" id="id_asisten" name="id_asisten"
                                    value="{{ $user['id_asisten'] }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value = "{{ $user['email'] }}">
                            </div>

                            <div class="mb-3">
                                <label for="role_id" class="form-label">Role</label>
                                <select class="form-select" id="role_id" name="role_id">
                                    <option disabled>Pilih Role</option>
                                    @foreach ($roles as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $user->role_id ? 'selected' : '' }}>
                                            {{ ucwords($item->role_name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="join_date" class="form-label">Tanggal Bergabung</label>
                                <input type="date" class="form-control" id="join_date" name="join_date"
                                    value="{{ $user['join_date'] }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Edit Data</button>
                            <a href="/asisten" class="btn btn-info">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
