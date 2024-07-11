<div class="container">
    <h2>Beli Tiket</h2>


    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success mt-3" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) : ?>
        <div class="alert alert-danger mt-3" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('tiket/buy_tiket') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group mt-3">
            <label for="no_kursi">No. Kursi</label>
            <input type="text" class="form-control" id="no_kursi" name="no_kursi" value="<?= set_value('no_kursi', ''); ?>">
            <?= form_error('no_kursi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mt-3">
            <label for="judul_film">Judul Film</label>
            <select class="form-control" id="judul_film" name="judul_film">
                <?php foreach ($judul_film_options as $option) : ?>
                    <option value="<?= $option; ?>" <?= set_select('judul_film', $option); ?>><?= $option; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('judul_film', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mt-3">
            <label for="jadwal_tayang">Jadwal Tayang</label>
            <select class="form-control" id="jadwal_tayang" name="jadwal_tayang">
                <?php foreach ($jadwal_tayang_options as $option) : ?>
                    <option value="<?= $option; ?>" <?= set_select('jadwal_tayang', $option); ?>><?= $option; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('jadwal_tayang', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mt-3">
            <label for="kategori_tiket">Kategori Tiket</label>
            <select class="form-control" id="kategori_tiket" name="kategori_tiket">
                <?php foreach ($kategori_tiket_options as $option) : ?>
                    <option value="<?= $option; ?>" <?= set_select('kategori_tiket', $option); ?>><?= $option; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('kategori_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mt-3">
            <label for="harga_tiket">Harga Tiket</label>
            <input type="text" class="form-control" id="harga_tiket" name="harga_tiket" value="<?= set_value('harga_tiket', ''); ?>">
            <?= form_error('harga_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mt-3">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select class="form-control" id="metode_pembayaran" name="metode_pembayaran">
                <?php foreach ($metode_pembayaran_options as $option) : ?>
                    <option value="<?= $option; ?>" <?= set_select('metode_pembayaran', $option); ?>><?= $option; ?></option>
                <?php endforeach; ?>
            </select>
            <?= form_error('metode_pembayaran', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mt-3">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value('tanggal', ''); ?>">
            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group mt-3">
            <label for="bukti_pembayaran">Unggah Bukti Pembayaran</label>
            <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran">
            <?= form_error('bukti_pembayaran', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Beli Tiket</button>

    </form>
</div>