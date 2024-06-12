@extends('admin.master')
@section('content')
  <div class="card shadow-lg p-2">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 text-center">
            <i style="font-size: 2em;" class="fa-solid fa-user"></i>
            <p>{{ $totalData }}</p>
            <p>Total Pendaftar</p>
          </div>
          <div class="col-md-6 text-center">
            <i style="font-size: 2em;" class="fa-solid fa-user"></i>
            <p>{{ $dataTahun }}</p>
            <p>Data Tahun {{ $tahun }}</p>
          </div>
        </div>
        <hr>
        <h5 class="text-center">Schedules</h5>
        <p>Coming Soon &#128513;</p>
      </div>
  </div>
@endsection