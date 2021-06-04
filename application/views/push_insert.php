<form method="post" action="<?php echo site_url('curls/curl.php'); ?>">
    <table class="table table-striped">
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value="" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Isi</td>
            <td><input type="text" name="isi" value="" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Kirim" class="btn btn-dark"></td>
        </tr>
    </table>
</form>