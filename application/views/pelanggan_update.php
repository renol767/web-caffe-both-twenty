<!--$data_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('pelanggan/update_submit/' . $data_pelanggan_single['uid']); ?>">
    <table class="table table-striped">
        <tr>
            <td>First Name</td>
            <!--$data_single['nama'] : menampilkan data  yang dipilih dari database -->
            <td><input type="text" name="first_name" value="<?php echo $data_pelanggan_single['first_name']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Email</td>
            <!--$data_single['nama'] : menampilkan data  yang dipilih dari database -->
            <td><input type="text" name="email" value="<?php echo $data_pelanggan_single['email']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Address</td>
            <!--$data_single['nama'] : menampilkan data yang dipilih dari database -->
            <td><input type="text" name="address" value="<?php echo $data_pelanggan_single['address']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Number Phone</td>
            <!--$data_single['nama'] : menampilkan data yang dipilih dari database -->
            <td><input type="text" name="numberphone" value="<?php echo $data_pelanggan_single['numberphone']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>No Whatsapp</td>
            <!--$data_single['nama'] : menampilkan data yang dipilih dari database -->
            <td><input type="text" name="numberwhatsapp" value="<?php echo $data_pelanggan_single['numberwhatsapp']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-warning"></td>
        </tr>
    </table>
</form>