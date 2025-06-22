<?= $this->extend('layout/templatebuku'); ?>
<?= $this->section('content'); ?>

<div class="book-container">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <a href="/books/create" class="btn btn-primary mb-3">Tambah Data Buku</a>
    <h1>Daftar Buku</h1>

    <table class="book-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Sampul</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($books as $b): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td>
                        <img src="/assets/img/books/<?= esc($b['sampul']); ?>" class="book-cover" alt="<?= esc($b['judul']); ?>">
                    </td>
                    <td><?= esc($b['judul']); ?></td>
                    <td><?= esc($b['penulis']); ?></td>
                    <td>
                        <a href="/books/<?= esc($b['slug']); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="/books/edit/<?= esc($b['slug']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="/books/<?= $b['id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>