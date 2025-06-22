<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h2><?= esc($title); ?></h2>

<form action="/books/update/<?= $book['id']; ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <input type="hidden" name="slug" value="<?= $book['slug']; ?>">
    <input type="hidden" name="sampulLama" value="<?= $book['sampul']; ?>">

    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" value="<?= (old('judul')) ? old('judul') : $book['judul']; ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('judul'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" value="<?= (old('penulis')) ? old('penulis') : $book['penulis']; ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('penulis'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" value="<?= (old('penerbit')) ? old('penerbit') : $book['penerbit']; ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('penerbit'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="sampul">Sampul</label>
        <img src="/assets/img/books/<?= $book['sampul']; ?>" class="img-preview img-fluid mb-2" style="max-height: 200px;">
        <input type="file" name="sampul" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" onchange="previewImage()">
        <div class="invalid-feedback">
            <?= $validation->getError('sampul'); ?>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Update Data</button>
</form>

<script>
    function previewImage() {
        const sampul = document.querySelector('input[name=sampul]');
        const imgPreview = document.querySelector('.img-preview');

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<?= $this->endSection(); ?>