<?php echo form_open_multipart('daftarmenu/update_submit/' . $data_daftarmenu_single['id']); ?>
<table class="table table-striped">
    <tr>
        <td>Nama Menu</td>
        <!--$data_daftarmenu_single['nama_menu'] : menampilkan data daftarmenu yang dipilih dari database -->
        <td><input type="text" name="name" value="<?php echo $data_daftarmenu_single['name']; ?>" required="" class="form-control"></td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <!--$data_daftarmenu_single['nama_menu'] : menampilkan data daftarmenu yang dipilih dari database -->
        <td><input type="text" name="description" value="<?php echo $data_daftarmenu_single['description']; ?>" required="" class="form-control"></td>
    </tr>
    <tr>
        <td>Ingredients</td>
        <!--$data_daftarmenu_single['nama_menu'] : menampilkan data daftarmenu yang dipilih dari database -->
        <td><input type="text" name="ingredients" value="<?php echo $data_daftarmenu_single['ingredients']; ?>" required="" class="form-control"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <!--$data_daftarmenu_single['nama_menu'] : menampilkan data daftarmenu yang dipilih dari database -->
        <td><input type="text" name="price" value="<?php echo $data_daftarmenu_single['price']; ?>" required="" class="form-control"></td>
    </tr>
    <td>
    <td><img src="<?php echo base_url() . '/gambar/' . $data_daftarmenu_single['picturePath']; ?>" width="100">
    </td>
    </td>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Simpan" class="btn btn-warning"></td>
    </tr>
</table>
<?php echo form_close(); ?>