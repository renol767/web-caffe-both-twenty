<form method="post" action="<?php echo site_url('daftarmenu/insert_submit'); ?>">
    <table class="table table-secondar">
        <tr>
            <td>Nama Menu</td>
            <td><input type="text" name="nama_menu" value="" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" value="" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" value="" required="" class="form-control"></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-dark"></td>
        </tr>
    </table>
</form>