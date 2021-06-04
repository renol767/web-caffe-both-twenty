<!--link tambah data-->
<a href="<?php echo site_url('push/insert'); ?>" class="btn btn-dark">Tambah</a>
<br /><br />

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>isi</th>

        </tr>
    </thead>
    <tbody>
        <!--looping data -->
        <?php foreach ($data_push as $push) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $push['id']; ?></td>
                <td><?php echo $push['judul']; ?></td>
                <td><?php echo $push['isi']; ?></td>

                <td>
                    <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('push/update/' . $push['id']); ?>" class="btn btn-warning">
                        Ubah
                    </a>

                    <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('push/delete/' . $push['id']); ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin?')">
                        Hapus
                    </a>

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>