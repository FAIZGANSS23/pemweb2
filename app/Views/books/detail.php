<?= $this->extend('layout/templatebuku'); ?>
<?= $this->section('content'); ?>

<div class="book-container">
    <div class="book-detail-container">
        <div class="book-cover-wrapper">
            <img src="/assets/img/books/<?= esc($book['sampul']); ?>" class="book-cover-large" alt="<?= esc($book['judul']); ?>">
        </div>

        <div class="book-info">
            <h1><?= esc($book['judul']); ?></h1>
            <p><strong>Penulis:</strong> <?= esc($book['penulis']); ?></p>
            <p><strong>Penerbit:</strong> <?= esc($book['penerbit']); ?></p>

            <div class="action-buttons mt-3">
                <a href="/books/edit/<?= esc($book['slug']); ?>" class="btn btn-warning">Edit</a>

                <form action="/books/<?= $book['id']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</button>
                </form>

                <a href="/books" class="btn btn-secondary">← Kembali</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>