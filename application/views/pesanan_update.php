<!--$data_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('pesanan/update_submit/' . $data_pesanan_single['id']); ?>">
    <table class="table table-striped">
        <tr>
            <td>Nama Menu</td>
            <!--$data_daftarmenu_single['nama'] : menampilkan data daftarmenu yang dipilih dari database -->
            <td><input type="text" name="food" value="<?php echo $data_pesanan_single['food']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Banyak</td>
            <!--$data_daftarmenu_single['nama'] : menampilkan data yang dipilih dari database -->
            <td><input type="text" name="quantity" value="<?php echo $data_pesanan_single['quantity']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <!--$data_single['nama'] : menampilkan data  yang dipilih dari database -->
            <td><input type="text" name="price" value="<?php echo $data_pesanan_single['price']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Total</td>
            <!--$data__single['nama'] : menampilkan data yang dipilih dari database -->
            <td><input type="text" name="total" value="<?php echo $data_pesanan_single['total']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Status</td>
            <!--$data_single['nama'] : menampilkan data  yang dipilih dari database -->
            <td><input type="text" name="status" value="<?php echo $data_pesanan_single['status']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-warning"></td>
        </tr>
    </table>
</form>