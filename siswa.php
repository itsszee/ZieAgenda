<?php
include_once('templates/header.php');
require_once('function.php');
?>




<!-- Custom styles for this page -->
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


<!-- Begin Page Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mt-5 mb-4 text-gray-800">Data Siswa</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-primary btn-icon-split"
                    data-toggle="modal" data-target="#tambahModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Data Siswa</span>
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>NIS</th>
                                <th>Alamat</th>
                                <th>Tanggal Lahir</th>
                                <th>No.hp</th>
                                <th>Email</th>
                            </tr>
                        </thead>

                        <tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>


<?php
include_once('templates/footer.php');
?>