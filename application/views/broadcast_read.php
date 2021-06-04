<!--link tambah data-->
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Nama</th>
            <th>Isi WA</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No Whatsapp</th>

        </tr>
    </thead>
    <tbody>
        <!--looping data -->
        <?php foreach ($data_pelanggan as $pelanggan) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $pelanggan['first_name']; ?></td>
                <td><?php echo $pelanggan['isi_wa']; ?></td>
                <td><?php echo $pelanggan['email']; ?></td>
                <td><?php echo $pelanggan['address']; ?></td>
                <td><?php echo $pelanggan['numberwhatsapp']; ?></td>






            </tr>
        <?php endforeach ?>


    </tbody>

</table>
<form method="post" action="<?php echo site_url('broadcast/update_submit/'); ?>">
    Format WA
    Gunakan tanda baca [...] untuk menampilkan isi variabel, misalnya [VAR_1] untuk menampilkan isi VAR_1.<br>Contoh: Halo [VAR_1], Tagihan Anda sebesar [VAR_2]. Terima Kasih.
    <br>
    <textarea name="isi_wa" rows=4 cols=100></textarea>
    <input type="hidden" name="isi_wa" value='$_SERVER[REQUEST_URI]'>
    <br><br>
    <td><input type="submit" name="submit" value="TULIS PESAN" class="btn btn-warning" onClick="return confirm('Apakah anda yakin?')"></td>

</form>

<form method="post " action="<?php echo site_url('kirim_wa/') ?>">

    <input type=hidden name=url value='$_SERVER[REQUEST_URI]'>
    <br>
    <td><input type="submit" name="submit" value="SEND WA" class="btn btn-warning" onClick="return confirm('Apakah anda yakin?')"></td>
</form>