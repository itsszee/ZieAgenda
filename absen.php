<?php
include_once('templates/header.php');

?>

<!-- Custom styles for this page -->
<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


<!-- Begin Page Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mt-5 mb-4 text-gray-800">Absensi</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-primary btn-icon-split"
                    data-toggle="modal" data-target="#tambahModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Data Absen</span>
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Absen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action=""
                        enctype="multipart/form-data">
                        <input type="hidden" name="id_tamu" id="id_tamu" value="<?= $kodeTamu ?>">
                        <div class="form-group row">
                            <label for="nama_tamu" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_tamu" id="nama_tamu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="alamat" id="alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-sm-3 col-form-label">No. Telepon</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_hp" id="no_hp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bertemu" class="col-sm-3 col-form-label">Bertemu dg.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="bertemu" id="bertemu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kepentingan" class="col-sm-3 col-form-label">Kepentingan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kepentingan" id="kepentingan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gambar" class="col-sm-3 col-form-label">Unggah Foto</label>
                            <div class="col-sm-8">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label type="file" class="custom-file-label" for="gambar"></label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="simpan">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>