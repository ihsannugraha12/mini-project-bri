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
            @if ((Auth::user()->role_id === 1) | (Auth::user()->role_id === 3))
                <div class="col-lg-4 d-flex align-items-strech">
                    <div class="card w-100 h-25">
                        <div class="card-header">
                            Code Generator
                        </div>
                        <div class="card-body">

                            <form data-route="./codeGenerator" id="form-data-kode" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary mb-4">
                                    <span>
                                        <i class="ti ti-plus"></i>
                                    </span>
                                    <span class="hide-menu">Generate Code</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Yearly Breakup -->
                        <div class="card w-100">
                            <div class="card-header">
                                Form Absen
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @elseif (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"> Selamat Datang, {{ $data->name }} </h5>
                                <div id="clock"></div>
                                @if ($value == null)
                                    <form method="POST" action="/absensi">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" id="id_asisten" name="id_asisten"
                                                value="{{ $data->id }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <select class="form-select" id="kelas" name="kelas">
                                                <option selected>Pilih Kelas</option>
                                                @foreach ($kelas as $item)
                                                    <option value="{{ $item->nama_kelas }}">{{ $item->nama_kelas }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="materi" class="form-label">Materi</label>
                                            <select class="form-select" id="materi" name="materi">
                                                <option selected>Pilih materi</option>
                                                @foreach ($materi as $item)
                                                    <option value="{{ $item->materi }}">{{ $item->materi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="teaching_role" class="form-label">Peran Jaga</label>
                                            <select class="form-select" id="teaching_role" name="teaching_role">
                                                <option selected>Pilih Peran</option>
                                                <option value="Kepala">Kepala</option>
                                                <option value="Petugas">Petugas</option>
                                                <option value="Aslab">Aslab</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode" class="form-label">Kode Absen</label>
                                            <input type="text" class="form-control" id="kode" name="kode">
                                            <div class="form-text"> Masukkan kode absen yang didapatkan dari
                                                admin/staff/asisten</div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Check In</button>
                                    </form>
                                @else
                                    <form method="POST" action="/absensi">
                                        @csrf
                                        @method('put')
                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" id="id_absensi" name="id_absensi"
                                                value="{{ $dtAbsensi->id }}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" id="id_asisten" name="id_asisten"
                                                value="{{ $data->id }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <select class="form-select" id="kelas" name="kelas" disabled <option
                                                selected>Pilih Kelas</option>
                                                @foreach ($kelas as $item)
                                                    <option value="{{ $item->nama_kelas }}">{{ $item->nama_kelas }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="materi" class="form-label">Materi</label>
                                            <select class="form-select" id="materi" name="materi" disabled>
                                                <option selected>Pilih materi</option>
                                                @foreach ($materi as $item)
                                                    <option value="{{ $item->materi }}">{{ $item->materi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="teaching_role" class="form-label">Peran Jaga</label>
                                            <select class="form-select" id="teaching_role" name="teaching_role" disabled>
                                                <option selected>Pilih Peran</option>
                                                <option value="Kepala">Kepala</option>
                                                <option value="Petugas">Petugas</option>
                                                <option value="Aslab">Aslab</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode" class="form-label">Kode Absen</label>
                                            <input type="text" class="form-control" id="kode" name="kode"
                                                disabled>
                                            <div class="form-text"> Anda telah check-in, Silahkan Check-out</div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Check Out</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            const timeElement = document.getElementById("clock");

            function updateTime() {
                const now = new Date();
                const hours = now.getHours();
                const minutes = now.getMinutes();
                const seconds = now.getSeconds();

                // Format the string with leading zeroes
                const clockStr =
                    `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                timeElement.innerText = clockStr;
            }

            updateTime();
            setInterval(updateTime, 1000);

        });
    </script>

    <script>
        $(document).ready(function() {

            function generateCode() {
                let route = $('#form-data-kode').data('route')
                console.log(route);
                axios.post(route, {
                        headers: {
                            "Content-Type": "multipart/form-data",
                        }
                    })
                    .then(function(response) {
                        let result = response.data;
                        if (result['kode']) {
                            Swal.fire({
                                title: 'Kode Berhasil Dibuat',
                                text: 'Kode Anda : ' + result['kode'],
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            }).then((result) => {
                                // If user clicks the confirm button
                                if (result.isConfirmed) {
                                    // Reload the page
                                    location.reload();
                                }
                            });
                        };

                    })
                    .catch(function(error) {
                        console.error(error);
                    });
            }

            $('#form-data-kode').submit(function(e) {
                e.preventDefault();
                generateCode();
            });

        });
    </script>
@endsection
