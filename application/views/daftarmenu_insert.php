<?php echo form_open_multipart('daftarmenu/insert_submit'); ?>
<table class="table table-secondar">
    <tr>
        <td>Nama Menu</td>
        <td><input type="text" name="name" value="" required="" class="form-control"></td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td><input type="text" name="description" value="" required="" class="form-control"></td>
    </tr>
    <tr>
        <td>Bahan-Bahan</td>
        <td><input type="text" name="ingredients" value="" required="" class="form-control"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="text" name="price" value="" required="" class="form-control"></td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td><input type="file" name="picturePath" value="" required="" class="form-control" size="20"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Simpan" class="btn btn-warning"></td>
    </tr>
</table>
<?php echo form_close(); ?>