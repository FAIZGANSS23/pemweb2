<?php echo $this->extend('layout/templatebuku'); ?>

<?php echo $this->section('content'); ?>
<div class="container mt-4">
    <h4 class="mb-3">Form Tambah Data Buku</h4>
    <form action="/books/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('judul'); ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('penulis'); ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('penerbit'); ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="sampul" class="form-label">Sampul</label>
            <input class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" type="file" id="sampul" name="sampul">
            <div class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</div>
<?php echo $this->endSection(); ?>