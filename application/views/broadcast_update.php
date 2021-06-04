<!--$data_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('broadcast/update_submit/' . $data_pelanggan_single['uid']); ?>">
    <table class="table table-striped">
        <tr>
            <td>ISI WA</td>
            <!--$data_single['nama'] : menampilkan data  yang dipilih dari database -->
            <td><input type="text" name="isi_wa" value="<?php echo $data_pelanggan['isi_wa']; ?>" required="" class="form-control"></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-warning"></td>
        </tr>
    </table>
</form>

