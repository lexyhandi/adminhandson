<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <a href="<?= base_url() ?>Dokter" class="btn btn-primary">Kembali</a>
                <p class="h1">Update data Dokter</p>
                <form action="<?= base_url() ?>dokter/update_dokter" method="POST">
                    <?php
                    $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                    );
                    foreach ($dokter as $row) {
                    ?>
                    <label for="dokter" class="">Nama Dokter</label>
                    <input name="dokter" type="text" class="form-control" value="<?= $row->dokter ?>">

                    <label for="spesialis" class="">Spesialis</label>
                    <input name="spesialis" type="text" class="form-control" value="<?= $row->spesialis ?>">
                    
                    <div class="divider"></div>

                    <label for="rwyt_pendidikan" class="">Riwayat Pendidikan</label>
                    <textarea name="rwyt_pendidikan" type="textarea" class="form-control"><?= $row->rwyt_pendidikan ?>"</textarea>

                    <label for="rwyt_pekerjaan" class="">Riwayat Pekerjaan</label>
                    <textarea name="rwyt_pekerjaan" type="textarea" class="form-control"><?= $row->rwyt_pendidikan ?></textarea>

                    <label for="motto" class="">Motto</label>
                    <textarea name="motto" type="textarea" class="form-control"><?= $row->rwyt_pendidikan ?></textarea>
                    <input type="hidden" name="id_dokter" value="<?= $id_dokter ?>" />
                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                    <?php }?>

                    <div class="divider"></div>
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>