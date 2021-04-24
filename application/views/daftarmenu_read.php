<!--link tambah data-->
<a href="<?php echo site_url('daftarmenu/insert'); ?>" class="btn btn-dark">Tambah</a>
<br /><br />

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nama Menu</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <!--looping data provinsi-->
        <?php foreach ($data_daftarmenu as $daftarmenu) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $daftarmenu['id']; ?></td>
                <td><?php echo $daftarmenu['nama_menu']; ?></td>
                <td><?php echo $daftarmenu['deskripsi']; ?></td>
                <td><?php echo $daftarmenu['harga']; ?></td>

                <td>
                    <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('daftarmenu/update/' . $daftarmenu['id']); ?>" class="btn btn-warning">
                        Ubah
                    </a>

                    <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('daftarmenu/delete/' . $daftarmenu['id']); ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin?')">
                        Hapus
                    </a>


                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>