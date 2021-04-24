<!--$data_provinsi_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('daftarmenu/update_submit/' . $data_daftarmenu_single['id']); ?>">
    <table class="table table-striped">
        <tr>
            <td>Nama Menu</td>
            <!--$data_daftarmenu_single['nama_menu'] : menampilkan data provinsi yang dipilih dari database -->
            <td><input type="text" name="nama_menu" value="<?php echo $data_daftarmenu_single['nama_menu']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <!--$data_daftarmenu_single['nama_menu'] : menampilkan data provinsi yang dipilih dari database -->
            <td><input type="text" name="deskripsi" value="<?php echo $data_daftarmenu_single['deskripsi']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <!--$data_daftarmenu_single['nama_menu'] : menampilkan data provinsi yang dipilih dari database -->
            <td><input type="text" name="Harga" value="<?php echo $data_daftarmenu_single['harga']; ?>" required="" class="form-control"></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-warning"></td>
        </tr>
    </table>
</form>