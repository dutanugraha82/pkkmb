<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PKKMB UBP Karawang</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/logo.ico') }}" />
  <link rel="stylesheet" href="{{ asset('/assets/css/styles.min.css') }}" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    <div class="container p-3">
        <div class="card w-100">
            <div class="card-header bg-primary p4">
                  <div class="d-flex" style="justify-content: space-between">
                    <h5 class="text-white"> Data 2018</h5>
                    <a href="/" class="btn btn-warning">Kembali</a>
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
                            <h6 class="fw-semibold mb-0">Action</h6>
                          </th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
    </div>
    </div>


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript">
    $(function () {
          
      var table = $('#table_peserta').DataTable({
          processing: true,
          serverSide: true,
          ajax: "/data-pkkmb/2018",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
              {data: 'nama_lengkap', name: 'nama_lengkap'},
              {data: 'action', name: 'action', orderable: true},
          ]
      });
          
    });
  </script>
</body>

</html>