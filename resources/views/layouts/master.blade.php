@extends('layouts.app')

@section('app_content')

  <!-- Navbar -->
  @includeIf('backend.include.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@includeIf('backend.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
@includeIf('backend.include.breadcumb')

    <!-- Main content -->
    <section class="content p-4">

      <!-- Default box -->
      @yield('master_content')
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@includeIf('backend.include.footer')
  <!-- /.control-sidebar -->
  @stop
