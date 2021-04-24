<!--link tambah data-->
<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>No WA</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data provinsi-->
		<?php foreach ($data_pelanggan as $pelanggan) : ?>

			<!--cetak data per baris-->
			<tr>
				<td><?php echo $pelanggan['id']; ?></td>
				<td><?php echo $pelanggan['nama']; ?></td>
				<td><?php echo $pelanggan['no_wa']; ?></td>
				<td><?php echo $pelanggan['alamat']; ?></td>

				<td>
					<!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('pelanggan/update/' . $pelanggan['id']); ?>" class="btn btn-warning">
						Ubah
					</a>

					<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('pelanggan/delete/' . $pelanggan['id']); ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin?')">
						Hapus
					</a>

				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>