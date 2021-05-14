<!--link tambah data-->
<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>UID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>No Whatsapp</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data provinsi-->
		<?php foreach ($data_pelanggan as $pelanggan) : ?>

			<!--cetak data per baris-->
			<tr>
				<td><?php echo $pelanggan['uid']; ?></td>
				<td><?php echo $pelanggan['first_name']; ?></td>
				<td><?php echo $pelanggan['email']; ?></td>
				<td><?php echo $pelanggan['address']; ?></td>
				<td><?php echo $pelanggan['numberwhatsapp']; ?></td>
				<td>
					<!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('pelanggan/update/' . $pelanggan['uid']); ?>" class="btn btn-warning">
						Ubah
					</a>

					<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('pelanggan/delete/' . $pelanggan['uid']); ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin?')">
						Hapus
					</a>

				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>