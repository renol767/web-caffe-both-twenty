<?php echo form_open_multipart('news/update_submit/' . $data_news_single['id']); ?>
<table class="table table-striped">
    <tr>
        <td>Title</td>
        <!--$data_daftarmenu_single['nama_menu'] : menampilkan data daftarmenu yang dipilih dari database -->
        <td><input type="text" name="title" value="<?php echo $data_news_single['title']; ?>" required="" class="form-control"></td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <!--$data_daftarmenu_single['nama_menu'] : menampilkan data daftarmenu yang dipilih dari database -->
        <td><input type="text" name="description" value="<?php echo $data_news_single['description']; ?>" required="" class="form-control"></td>
    </tr>

    <td>
    <td><img src="<?php echo base_url() . '/gambar/' . $data_news_single['picture']; ?>" width="100">
    </td>
    </td>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Simpan" class="btn btn-warning"></td>
    </tr>
</table>
<?php echo form_close(); ?>