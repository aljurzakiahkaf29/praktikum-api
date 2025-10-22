@extends('layout.app')
@section('content')




<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Fakultas</h1>
<a href="" class="btn btn-primary mb-4">Tambah Fakultas</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
       <form>
  <div class="form-group">
    <label for="fakultas_name">Nama Fakultas</label>
    <input type="text" class="form-control" id="fakultas_name" name="fakultas_name" placeholder="Masukkan Nama Fakultas">
  </div>
  <div class="form-group">
    <label for="kode_fakultas">kode Fakultas</label>
    <input type="text" class="form-control" id="kode_fakultas" name="kode_fakultas" placeholder="Masukkan Kode Fakultas">
    </div>
</div>

<div class="form-program">
    <button type="submit" class="btn btn-primary">Tambah</button>
</div>


@endsection
