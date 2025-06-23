<!DOCTYPE html>
<html lang="id">

<head>

    <link rel="stylesheet" href="/css/books.css"> <!-- CSS KHUSUS BUKU -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'AzkaStore Books' ?></title>
</head>

<body>
    <!-- Navbar Khusus Buku -->
    <nav>
        <div class="logo" style="color: #00ffff; font-size: 1.8rem;">
            Azka<span style="color:rgb(58, 15, 248);">Books</span>
        </div>
        <div class="nav-links">
            <a href="/books">Daftar Buku</a>s
        </div>
    </nav>

    <!-- Container Konten Buku -->
    <div class="book-container">
        <?= $this->renderSection('content') ?>
    </div>
    <!-- Footer Khusus Buku -->
    <footer style="text-align: center; padding: 1rem; background:rgb(233, 11, 41);">
        &copy; <?= date('Y') ?> AzkaStore Books. All rights reserved.
    </footer>
</body>

</html>