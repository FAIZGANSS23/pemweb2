<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h1><?= $title; ?></h1>
<?php foreach ($alamat as $a): ?>
    <ul>
        <li>Tipe: <?= $a['tipe']; ?></li>
        <li>Alamat: <?= $a['alamat']; ?></li>
        <li>Kota: <?= $a['kota']; ?></li>
    </ul>
<?php endforeach; ?>
<?= $this->endSection(); ?>