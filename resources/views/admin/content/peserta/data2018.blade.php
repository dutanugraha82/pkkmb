@extends('admin.master')
@section('content')
<div class="card w-100">
    <div class="card-header bg-primary p4">
          <h5 class="text-white"> Data 2018</h5>
        </div>
    </div>
    <div class="card-body p-4">
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle" id="table_peserta">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">NO</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Nama Lenghkap</h6>
                </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">NIM/Nomor</h6>
                  </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Angkatan</h6>
              </th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
@endsection
@push('js')
<script type="text/javascript">
  $(function () {
        
    var table = $('#table_peserta').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/admin/pesertas/2018",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'nama_lengkap', name: 'nama_lengkap'},
            {data: 'nomor', name: 'nomor'},
            {data: 'tahun', name: 'tahun', orderable: true},
        ]
    });
        
  });
</script>
@endpush