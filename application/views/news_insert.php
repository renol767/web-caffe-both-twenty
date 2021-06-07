<?php echo form_open_multipart('news/insert_submit'); ?>
<table class="table table-secondar">
    <tr>
        <td>Title</td>
        <td><input type="text" name="title" value="" required="" class="form-control"></td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td><input type="text" name="description" value="" required="" class="form-control"></td>
    </tr>

    <td>Gambar</td>
    <td><input type="file" name="picture" value="" required="" class="form-control" size="20"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Simpan" class="btn btn-warning"></td>
    </tr>
</table>
<?php echo form_close(); ?>