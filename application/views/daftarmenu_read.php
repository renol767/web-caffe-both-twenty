<!--link tambah data-->
<a href="<?php echo site_url('daftarmenu/insert'); ?>" class="btn btn-dark">Tambah</a>
<br /><br />

<table class="table table-striped">
    <thead class="thead-dark">
        <tr align="center">
            <th>ID</th>
            <th width="150px">Nama Menu</th>
            <th width="400px">Deskripsi</th>
            <th width="80px">Harga</th>
            <th width="200px">Gambar</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        
        <!--looping data -->
        <?php $i = 1; foreach ($data_daftarmenu as $daftarmenu) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $i++?></td>
                <td><?php echo $daftarmenu['name']; ?></td>
                <td><?php echo $daftarmenu['description']; ?></td>
                <td><?php echo $daftarmenu['price']; ?></td>

                <td><img src="<?php echo base_url() . '/gambar/' . $daftarmenu['picturePath']; ?>" width="200"></td>

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