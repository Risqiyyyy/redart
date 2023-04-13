@extends('layouts.mainlayouts')
@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <a href="{{ route('tambah_user') }}"><button type="button" class="btn mb-3 ml-3 btn-outline-primary btn-sm">Tambah User</button></a>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Semua User</h3>
              </div>
              <!-- /.card-header -->
              @include('sweetalert::alert')
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Dibuat</th>
                    <th>DiUpdate</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $u)
                  <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->created_at }}</td>
                    <td>{{ $u->updated_at }}</td>
                    <td>
                      <a href="/user/edit/{{ $u->id }}"><i class="fa-solid fa-pen-to-square"></i></a> | 
                      <a href="/user/hapus/{{ $u->id }}"><i class="fa-solid fa-trash" style="color: #f41010;"></i></a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection