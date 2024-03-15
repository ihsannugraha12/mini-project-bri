@php
    use App\Models\User;
    $user = new User();
@endphp
@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Report Absen</li>
            </ol>
        </nav>
        <h4>Laporan Data Absen</h4>

        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        {{-- <form data-route="./codeGenerator" id="form-data-kode">
                            <button type="submit" class="btn btn-primary mb-4">
                                <span>
                                    <i class="ti ti-plus"></i>
                                </span>
                                <span class="hide-menu">Laporan Data Absen</span>
                            </button>
                        </form> --}}

                        <div class="table-responsive">
                            @if ($absensi->count() > 0)
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">No.</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Nama</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Peran</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Kelas</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Materi</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Tanggal</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Mulai</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Selesai</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Durasi</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($absensi as $key => $value)
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">{{ $key + 1 }}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class=" mb-0">
                                                        {{ $user->find($value['id_asisten'])->name }}
                                                    </h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class=" mb-1">{{ $value['teaching_role'] }}
                                                    </h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class=" mb-1">{{ $value['kelas'] }}
                                                    </h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class=" mb-1">{{ $value['materi'] }}
                                                    </h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class=" mb-1">{{ $value['date'] }}
                                                    </h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class=" mb-1">{{ $value['start'] }}
                                                    </h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class=" mb-1">{{ $value['end'] }}
                                                    </h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class=" mb-1">{{ $value['duration'] }} Menit
                                                    </h6>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div>Data Not Found</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
