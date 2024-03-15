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
                <li class="breadcrumb-item active" aria-current="page">Kode</li>
            </ol>
        </nav>
        <h4>Data Kode</h4>

        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <form data-route="./codeGenerator" id="form-data-kode">
                            <button type="submit" class="btn btn-primary mb-4">
                                <span>
                                    <i class="ti ti-plus"></i>
                                </span>
                                <span class="hide-menu">Generate Code</span>
                            </button>
                        </form>

                        <div class="table-responsive">
                            @if ($kode->count() > 0)
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">No.</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Kode</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Pemilik Kode</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Penerima Kode</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Status</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kode as $key => $value)
                                            <tr>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">{{ $key + 1 }}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">{{ $value['code'] }}</h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-1">{{ $user->find($value['id_user'])->name }}
                                                    </h6>
                                                </td>
                                                <td class="border-bottom-0">
                                                    <p class="mb-0 fw-normal">
                                                        {{ isset($user->find($value['id_user_get'])->name) ? $user->find($value['id_user_get'])->name : 'Belum Digunakan' }}
                                                    </p>
                                                </td>

                                                <td class="border-bottom-0">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <span
                                                            class="badge {{ $user->find($value['id_user_get']) == null ? 'bg-warning' : 'bg-primary' }}  rounded-3 fw-semibold">{{ $user->find($value['id_user_get']) == null ? 'Belum Dipakai' : 'Dipakai' }}</span>
                                                    </div>
                                                </td>
                                                {{-- <td class="border-bottom-0">
                                                    <a href="./asisten/{{ $value['id'] }}" class="btn btn-info">Edit</a>
                                                    <form method="post" action="/asisten/{{ $value['id'] }}"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </td> --}}
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

@section('script')
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
