<!--link tambah data-->

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nama Menu</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
        <!--looping data provinsi-->
        <?php foreach ($data_pesanan as $pesanan) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $pesanan['id']; ?></td>
                <td><?php echo $pesanan['nama_menu']; ?></td>

                <td>
                    <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('pesanan/update/' . $pesanan['id']); ?>" class="btn btn-warning">
                        Ubah
                    </a>

                    <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('pesanan/delete/' . $pesanan['id']); ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin?')">
                        Hapus
                    </a>

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>