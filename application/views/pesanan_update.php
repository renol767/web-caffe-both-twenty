<!--$data_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('pesanan/update_submit/' . $data_pesanan_single['id']); ?>">
    <table class="table table-striped">

        <tr>
            <td>Email</td>
            <!--$data_single['nama'] : menampilkan data  yang dipilih dari database -->
            <td><input type="text" name="quantity" value="<?php echo $data_pesanan_single['quantity']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Address</td>
            <!--$data_single['nama'] : menampilkan data yang dipilih dari database -->
            <td><input type="text" name="total" value="<?php echo $data_pesanan_single['total']; ?>" required="" class="form-control"></td>
        </tr>

        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Simpan" class="btn btn-warning"></td>
        </tr>
    </table>
</form>