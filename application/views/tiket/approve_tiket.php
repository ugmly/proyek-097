<div class="container mt-5">
    <h2 class="mb-4 text-center">Approve Tiket</h2>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th class="text-center align-middle">No. Kursi</th>
                    <th class="text-center align-middle">Judul Film</th>
                    <th class="text-center align-middle">Jadwal Tayang</th>
                    <th class="text-center align-middle">Kategori Tiket</th>
                    <th class="text-center align-middle">Harga Tiket</th>
                    <th class="text-center align-middle">Metode Pembayaran</th>
                    <th class="text-center align-middle">Tanggal</th>
                    <th class="text-center align-middle">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pending_tiket)) : ?>
                    <?php foreach ($pending_tiket as $tiket) : ?>
                        <tr>
                            <td class="text-center align-middle"><?= $tiket['no_kursi']; ?></td>
                            <td class="text-center align-middle"><?= $tiket['judul_film']; ?></td>
                            <td class="text-center align-middle"><?= $tiket['jadwal_tayang']; ?></td>
                            <td class="text-center align-middle"><?= $tiket['kategori_tiket']; ?></td>
                            <td class="text-center align-middle"><?= $tiket['harga_tiket']; ?></td>
                            <td class="text-center align-middle"><?= $tiket['metode_pembayaran']; ?></td>
                            <td class="text-center align-middle"><?= $tiket['tanggal']; ?></td>
                            <td class="text-center align-middle">
                                <a href="<?= site_url('admin/approve/' . $tiket['id']); ?>" class="btn btn-success btn-sm">Approve</a>
                                <a href="<?= site_url('admin/reject/' . $tiket['id']); ?>" class="btn btn-danger btn-sm">Reject</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada tiket pending.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
