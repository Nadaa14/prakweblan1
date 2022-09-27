<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<form method="POST" action="/update/<?= $mahasiswa['id'] ?>">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" name="npm" id="npm" aria-describedby="npm" value="<?= $mahasiswa['npm'] ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="<?= $mahasiswa['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" value="<?= $mahasiswa['alamat'] ?>">
            </div>
        </div>

        <div class="col-6">
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $deskripsi ?></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
</form>

<?= $this->endSection() ?>