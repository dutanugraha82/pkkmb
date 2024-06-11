@extends('admin.master')
@section('content')
<div class="card">
    <div class="card-header bg-primary">
        <h5 class="text-white">Tambah Data Peserta</h5>
        <small style="color: white;"> <sup style="color: red;">*</sup>Fitur ini hanya digunakan bila terdapat data peserta yang hilang</small>
    </div>
    <div class="card-body shadow-lg">
      <form action="/admin/pesertas/tambah-data/store" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="prodi" class="form-label">Program Studi</label>
          <input type="text" class="form-control" name="prodi" id="prodi">
        </div>
        <div class="mb-3">
          <label for="angkatan" class="form-label">Angkatan</label>
          <input type="number" class="form-control" name="angkatan" id="angkatan">
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="number" class="form-control" name="nim" id="nim">
        </div>
        <div class="d-flex justify-content-right mt-4">
            <a href="/admin/pesertas" class="btn btn-warning me-2">Kembali</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection