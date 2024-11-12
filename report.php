<?php
include_once('templates/header.php');
?>


<!-- Begin Page Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 mt-4 text-gray-800">Rekap Absen</h1>

        <div class="row mx-auto d-flex justify-content-center">
            <!-- Periode Awal -->
            <div class="col-xl-5 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <form method="post" action="">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <div class="font-weight-bold text-primary text-uppercase mb-1">
                                                    Periode
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <input type="date" class="form-control mb-2" id="p_awal" name="p_awal" required>
                                            </div>
                                            <div class="col-auto">
                                                <div class="font-weight-bold text-primary mb-1">
                                                    s.d
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <input type="date" class="form-control mb-2" id="p_akhir" name="p_akhir" required>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" name="tampilkan" class="btn btn-primary mb-2">
                                                    Tampilkan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <span class="text">Tabel Rekap Absen</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Wali Kelas</th>
                                <th>Hadir</th>
                                <th>Tidak Hadir</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

<?php
include_once('templates/footer.php');
?>