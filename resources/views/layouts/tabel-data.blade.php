<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard|PERPUSWEB</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
  <link rel="stylesheet" href="adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('layouts.inc_admin.navbar')
    <!-- main sidebar container -->
    @include('layouts.inc_admin.sidebar')

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h1 class="m-0">Data Buku</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 d-flex justify-content-start align-items-center">
              <a href="{{ 'form1'}}" class="btn btn-primary btn-sm mt-2">
                <i class="fas fa-plus"></i> Tambah Data
              </a>
            </div>

            <!-- <div class="col-md-4"> -->
              <!-- <div class="input-group mt-3">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div> -->
            <!-- </div> -->
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <table class="table table-hover table-striped" id="buku-table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun terbit</th>
                    <!-- <th>Deskripsi Kamar</th>  -->
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    <aside class="control-sidebar control-sidebar-dark">
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
        Version 1.0.1
      </div>
      <strong>Copyright &copy; 2024 </strong> All rights reserved.
    </footer>
  </div>

  <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
  <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#buku-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route('api.buku') !!}",
        columns: [{
            data: 'id',
            name: 'id'
          },
          {
            data: 'judul',
            name: 'judul'
          },
          {
            data: 'penulis',
            name: 'penulis'
          },
          {
            data: 'penerbit',
            name: 'penerbit'
          },
          {
            data: 'tahun_terbit',
            name: 'tahun_terbit'
          },
        ]
      });
    });
  </script>

</body>

</html>