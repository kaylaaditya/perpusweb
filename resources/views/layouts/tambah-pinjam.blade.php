<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard|PERPUSWEB</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- main navbar container -->
        @include('layouts.inc_admin.navbar')

        <!-- main sidebar container -->
        @include('layouts.inc_admin.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid mb-2">
                    <h1 class="m-1">Form Peminjaman</h1>

                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <form action="" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <p class="mt-2">Nama Peminjam</p>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                                <p class="mt-2">Nama Buku</p>
                                <input type="text" class="form-control" id="barang" name="barang" required>
                                <p class="mt-2">Tgl Pinjam</p>
                                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>

                                <div class="modal-footer justify-content-between">
                                    <div class="ml-2 text-left mt-3 mb-0">
                                        <a href="{{ 'peminjam'}}" class="btn btn-danger">
                                            Kembali
                                        </a>
                                    </div>
                                    <div class="mr-2 text-right mt-3 mb-0">
                                        <button type="submit" class="btn btn-success">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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

</body>

</html>