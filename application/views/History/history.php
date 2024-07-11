<div class="card border border-primary">
	<div class="card-header bg-primary text-white">History Data Pemesanan Tiket</div>
	<div class="card-body">
		<div class="button-container">
			<!-- <form action="<?php echo site_url('tiket/search_tiket'); ?>" method="post">
				<div class="row">
					<div class="col-md-10 col-sm-8">
						<input class="form-control" type="text" value="<?php echo isset($keyword) ? $keyword : ''; ?>" name="keyword" placeholder="Cari Nomor ID">
					</div>
					<div class="col-md-1 col-sm-2">
						<button class="btn btn-primary mt-2 btn-block" type="submit">Cari</button>
					</div>
					<div class="col-md-1 col-sm-2">
						<button class="btn btn-success mt-2 btn-block" onclick="window.location.href='<?php echo base_url('History/history'); ?>'" type="button">Reset</button>
					</div>
				</div>
			</form> -->

			<!-- <button class="btn btn-primary mt-2" onclick="window.location.href='<?php echo base_url('tiket/create_tiket'); ?>'">Tambah Pemesanan Tiket</button> -->
		</div>
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

		<div class="table-responsive">
			<table class="table table-bordered table-hover mt-3">
				<thead>
					<tr class="table-primary">
						<th class="text-center">ID</th>
						<th class="text-center">No. Kursi</th>
						<th class="text-center">Judul Film</th>
						<th class="text-center">Jadwal Tayang</th>
						<th class="text-center">Kategori</th>
						<th class="text-center">Harga</th>
						<th class="text-center">Pembayaran</th>
						<th class="text-center">Tanggal</th>
						<th class="text-center">Status</th>

					</tr>
				</thead>
				<?php foreach ($tiket as $tkt) { ?>
					<tbody>
						<tr>
							<td class="text-center"><?php echo $tkt['id']; ?></td>
							<td class="text-center"><?php echo $tkt['no_kursi']; ?></td>
							<td class="text-center"><?php echo $tkt['judul_film']; ?></td>
							<td class="text-center"><?php echo $tkt['jadwal_tayang']; ?></td>
							<td class="text-center"><?php echo $tkt['kategori_tiket']; ?></td>
							<td class="text-center"><?php echo $tkt['harga_tiket']; ?></td>
							<td class="text-center"><?php echo $tkt['metode_pembayaran']; ?></td>
							<td class="text-center"><?php echo $tkt['tanggal']; ?></td>

							<td class="text-center">
                <?php
                if($tkt['status'] == 'approved'){ ?>
                  <p  class="badge text-bg-success">
                    <?php echo $tkt['status']; ?>
                  </p>
                <?php } ?>
                <?php
                if($tkt['status'] == 'pending'){ ?>
                  <p  class="badge text-bg-warning">
                    <?php echo $tkt['status']; ?>
                  </p>
                <?php } ?>
                <?php
                if($tkt['status'] == 'rejected'){ ?>
                  <p  class="badge text-bg-danger">
                    <?php echo $tkt['status']; ?>
                  </p>
                <?php } ?>
								
							</td>
						</tr>
					</tbody>
				<?php } ?>
			</table>
		</div>
	</div>
</div>