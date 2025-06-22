<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up Game</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        /* CSS NEON EFFECT (KHUSUS GAME) */
        .neon-cyan {
            color: #00ffff;
            text-shadow: 0 0 5px #00ffff;
        }

        .neon-pink {
            color: #ff40a6;
            text-shadow: 0 0 5px #ff40a6;
        }

        /* ... (CSS lama tetap di sini) ... */
    </style>
</head>

<body>
    <nav>
        <div class="logo neon-cyan">Azka<span class="neon-pink">Store</span></div>
        <div class="nav-links">
            <a href="/">Beranda</a>
            <a href="/daftar-game">Daftar Game</a>
            <a href="/cara-topup">Cara Top Up</a>
            <a href="/books">Buku</a> <!-- Tautan ke halaman buku -->
        </div>
    </nav>

    <?= $this->renderSection('content'); ?> <!-- Konten game -->

    <footer>
        &copy; <?= date('Y') ?> TopUpAzka. All rights reserved.
    </footer>
</body>

</html>