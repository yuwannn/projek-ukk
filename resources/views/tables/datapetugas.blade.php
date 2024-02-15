@extends('layouts.main')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                @if (session()->has('Success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('Success') }}
                        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('editsuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('editsuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('delete') }}
                        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                    </div>
                @endif
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Petugas</h4>
                            <button class="badge badge-success text-success mb-3" data-bs-toggle="modal"
                                data-bs-target="#createModal">Tambah Data Petugas</button>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                Nama
                                            </th>
                                            <th>
                                                Username
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Alamat
                                            </th>
                                            <th>
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>
                                                    <button class="badge badge-warning" data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $item->id }}"><i
                                                            class="bi bi-pencil-square text-warning"></i></button>
                                                    <button class="badge badge-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $item->id }}"><i
                                                            class="bi bi-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
                        href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
                    BootstrapDash.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights
                    reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
@endsection

{{-- Create Modal  --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pegawai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('DataPegawai.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nama" class="col-form-label">Nama:</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="col-form-label">Username:</label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password:</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="col-form-label">Alamat:</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@foreach ($data as $item)
    <!-- modal delete -->
    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Apakah anda yakin menghapus data pegawai ini?
                    </h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Klik Hapus Jika Sudah Yakin</div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ url('admin/DataPegawai/' . $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

{{-- Modal Edit --}}
@foreach ($data as $item)
    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pegawai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/DataPegawai/' . $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="nama" class="col-form-label">Nama:</label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        value="{{ $item->nama }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="col-form-label">Username:</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        value="{{ $item->username }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="col-form-label">Password:</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="{{ $item->email }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="col-form-label">Alamat:</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                        value="{{ $item->alamat }}" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
