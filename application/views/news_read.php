<!--link tambah data-->
<a href="<?php echo site_url('news/insert'); ?>" class="btn btn-dark">Tambah</a>
<br /><br />

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th width="150px">Title</th>
            <th width="300px">Deskripsi</th>
            <th width="150px">Gambar</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>

        <!--looping data -->
        <?php $i = 1;
        foreach ($data_news as $news) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $news['title']; ?></td>
                <td style=" max-width: 40px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;"><?php echo $news['description']; ?></td>


                <td><img src="<?php echo base_url() . '/gambar/' . $news['picture']; ?>" width="200"></td>

                <td>
                    <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('news/update/' . $news['id']); ?>" class="btn btn-warning">
                        Ubah
                    </a>

                    <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('news/delete/' . $news['id']); ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin?')">
                        Hapus
                    </a>


                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>