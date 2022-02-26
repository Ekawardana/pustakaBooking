<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('laporan/LaporanPrint'); ?>" class="btn btn-warning mb-3"><i class="fas fa-print"></i> Print</a>
            <a href="<?= base_url('laporan/LaporanPDF'); ?>" class="btn btn-danger mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
            <a href="<?= base_url('laporan/LaporanExcel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $start = 0;
                    foreach ($buku as $b) { ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $b['judul_buku']; ?></td>
                            <td><?= $b['pengarang']; ?></td>
                            <td><?= $b['penerbit']; ?></td>
                            <td><?= $b['tahun_terbit']; ?></td>
                            <td><?= $b['isbn']; ?></td>
                            <td><?= $b['stok']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->