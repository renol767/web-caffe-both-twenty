<form method="post" action="<?php echo site_url('push/insert_submit'); ?>">
    <table class="table table-striped">
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value="" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Isi</td>
            <td><input type="text" name="isi" value="" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Kirim" class="btn btn-warning" data-toggle="modal" data-target="#modalSaya"></td>
        </tr>


    </table>
</form>

<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSayaLabel">Push Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Push Notification berhasil dikirm
                <br />

            </div>

        </div>
    </div>
</div>