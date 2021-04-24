<form method="post" action="<?php echo site_url('pesanan/insert_submit/'); ?>">
    <table class="table table-striped">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="userfile" value="" required="" class="form-control-file"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-dark"></td>
        </tr>
    </table>
</form>