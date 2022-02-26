<div class="container">
    <center>
        <table>
            <?php foreach ($agt_booking as $ab) : ?>
                <tr>
                    <td>Data Anggota</td>
                    <td>:</td>
                    <th><?= $ab['name']; ?></th>
                </tr>
                <tr>
                    <td>ID Booking</td>
                    <td>:</td>
                    <th><?= $ab['id_booking']; ?></th>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <td colspan="3">
                <div class="table-responsive full-width">
                    <table class="table table-bordered table-striped table-hover" id="table-datatable">
                        <tr>
                            <th>No.</th>
                            <th>ID Buku</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                        </tr>
                        <?php $no = 1;
                        foreach ($detail as $d) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $d['id_buku']; ?></td>
                                <td><?= $d['judul_buku']; ?></td>
                                <td><?= $d['pengarang']; ?></td>
                                <td><?= $d['penerbit']; ?></td>
                                <td><?= $d['tahun_terbit']; ?></td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </table>
                </div>
            </td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <a href="#" onclick="window.history.go(-1)" class="btn btn-outline-danger">
                        <i class="fas fa-fw fa-undo"></i> Kembali
                    </a>
                </td>
            </tr>
        </table>
    </center>
</div>

</div>
<!-- End content -->