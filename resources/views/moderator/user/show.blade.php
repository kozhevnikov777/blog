@extends('moderator.main.main_layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex align-items-center">
            <h1 class="m-0 mr-2">{{ $user->name }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('moderator.user.main') }}">Назад</a></li>
              <li class="breadcrumb-item active">Пользователи</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
            <div class="card">
                <!-- ./card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <tbody>
                      <tr aria-expanded="false">
                        <td>ID</td>
                        <td>{{ $user->id }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Имя</td>
                        <td>{{ $user->name }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Почта</td>
                        <td>{{ $user->email }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Дата регистрации пользователя</td>
                        <td>{{ $user->created_at }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Дата изменения данных у пользователя</td>
                        <td>{{ $user->updated_at }}</td>
                      </tr>
                      <tr aria-expanded="false">
                        <td>Статус (0-участник; 1-админ; 2-модер)</td>
                        <td>{{ $user->role }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
