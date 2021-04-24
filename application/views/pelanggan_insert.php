<form method="post" action="<?php echo site_url('pelanggan/insert_submit/'); ?>">
	<table class="table table-striped">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="" required="" class="form-control"></td>
		</tr>
		<tr>
		<tr>
			<td>alamat</td>
			<td><input type="text" name="alamat" value="" required="" class="form-control"></td>

		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</form>