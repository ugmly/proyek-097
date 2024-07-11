<div class="card border border-primary">
    <div class="card-header bg-primary text-white"><?php echo isset($tiket) ? 'Edit Tiket' : 'Tambah Tiket'; ?></div>
    <div class="card-body">
        <form action="<?php echo isset($barang) ? site_url('tiket/edit_tiket/' . $tiket['id']) : site_url('tiket/create_tiket'); ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="no_kursi">No. Kursi</label>
                        <input type="text" class="form-control" id="no_kursi" name="no_kursi" value="<?= set_value('no_kursi'); ?>">
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
                </div>
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="harga_tiket">Harga Tiket</label>
                        <input type="text" class="form-control" id="harga_tiket" name="harga_tiket" value="<?= set_value('harga_tiket'); ?>">
                        <?= form_error('harga_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
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
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value('tanggal'); ?>">
                            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="w-100 btn btn-primary"><?php echo isset($tiket) ? 'Update' : 'Simpan'; ?></button><br>
                    <a href="<?php echo site_url('tiket/data_tiket'); ?>" class="btn w-100 btn-danger mt-3">Batal</a>
                </div>
        </form>






    </div>
</div>