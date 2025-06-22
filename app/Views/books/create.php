<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h2><?= esc($title); ?></h2>

<form action="/books/save" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="<?= old('judul'); ?>" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('judul'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" value="<?= old('penulis'); ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('penulis'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" value="<?= old('penerbit'); ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('penerbit'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="sampul">Sampul</label>
        <input type="file" name="sampul" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('sampul'); ?>
        </div>
    </div>

    <button type="submit" class="btn btn-success mt-2">Tambah Data</button>
</form>

<?= $this->endSection(); ?>