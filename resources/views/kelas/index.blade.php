@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kelas</li>
            </ol>
        </nav>
        <h4>Data Kelas</h4>

        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">

                        @if (session('succes'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('succes') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <a class="btn btn-primary mb-4" href="./kelas/create">
                            <span>
                                <i class="ti ti-plus"></i>
                            </span>
                            <span class="hide-menu">Tambah Data</span>
                        </a>
                        {{-- 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Data
                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#updateModal">
                            Ubah Data
                        </button>

                        <!-- Modal -->
                        <div class="modal modal-lg fade" id="exampleModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Data Kelas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
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

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                        <div class="table-responsive">
                            @if ($kelas->count() > 0)
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">No.</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Jurusan</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Fakultas</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Tingkat</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Nama Kelas</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Action</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas as $key => $value)
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">{{ $key + 1 }}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">{{ $value['jurusan'] }}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1">{{ $value['fakultas'] }}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal">{{ $value['tingkat'] }}</p>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal">{{ $value['nama_kelas'] }}</p>
                                                </td>
                                                {{-- <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="badge bg-primary rounded-3 fw-semibold"></span>
                                                    </div>
                                                </td> --}}
                                                <td class="border-bottom-0">
                                                    <a href="/kelas/{{ $value['id'] }}" class="btn btn-info">Edit</a>
                                                    <form method="post" action="/kelas/{{ $value['id'] }}"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="text-center">
                                    <p>Data Not Found</p>
                                </div>
                            @endif
                        </div>


                        {{-- <div class="modal modal-lg fade" id="updateModal" tabindex="-1"
                            aria-labelledby="updateModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateModalLabel">Data Kelas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="/kelas">
                                            @csrf
                                            @method('PUT')
                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissible fade show"
                                                    role="alert">
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
                                                <input type="text" class="form-control" id="fakultas"
                                                    name="fakultas" value="{{ old('fakultas') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tingkat" class="form-label">Tingkat</label>
                                                <input type="text" class="form-control" id="tingkat" name="tingkat"
                                                    value = "{{ old('tingkat') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                                <input type="text" class="form-control" id="nama_kelas"
                                                    name="nama_kelas" value = "{{ old('nama_kelas') }}">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
