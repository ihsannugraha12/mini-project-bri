@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>

        <h4>Halaman Absensi</h4>

        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-4 d-flex align-items-strech">
                <div class="card w-100 h-25">
                    <div class="card-header">
                        Code Generator
                    </div>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Generate Code</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Yearly Breakup -->
                        <div class="card w-100">
                            <div class="card-header">
                                Form Absen
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Selamat Datang Ihsan </h5>
                                <div id="clock"></div>

                                <form>
                                    <div class="mb-3">
                                        <label for="idAsisten" class="form-label">Id Asisten</label>
                                        <input type="text" class="form-control" id="idAsisten" name="idAsisten">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelas" class="form-label">Kelas</label>
                                        <select class="form-select" id="kelas" name="kelas">
                                            <option selected>Pilih Kelas</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="materi" class="form-label">Materi</label>
                                        <select class="form-select" id="materi" name="materi">
                                            <option selected>Pilih materi</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="peranJaga" class="form-label">Peran Jaga</label>
                                        <select class="form-select" id="peranJaga" name="peranJaga">
                                            <option selected>Pilih Peran</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kodeAbsen" class="form-label">Kode Absen</label>
                                        <input type="text" class="form-control" id="kodeAbsen" name="kodeAbsen">
                                        <div class="form-text"> Masukkan kode absen yang didapatkan dari
                                            staff/asisten</div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Check In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
