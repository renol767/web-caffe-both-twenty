<!--link tambah data-->

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th width="50px">No</th>
            <th width="200px">Nama Menu</th>
            <th width="100px">Banyak</th>
            <th width="100px">Total</th>
            <th width="200px">Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!--looping data
        <?php $i = 1; foreach ($data_pesanan as $pesanan) : ?>

            <!--cetak data per baris-->
        <tr>
            <td><?php echo $i++?></td>
            <td><?php echo $pesanan['name']; ?></td>
            <td><?php echo $pesanan['quantity']; ?></td>
            <td><?php echo $pesanan['total']; ?></td>
            <td><?php echo $pesanan['status']; ?></td>

            <td>
               
                <a href="<?php echo site_url('pesanan/delete/' . $pesanan['id']); ?>" class="btn btn-success" onClick="return confirm('Apakah anda yakin?')">
                    Konfirmasi Pesanan
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