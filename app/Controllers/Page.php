<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        return "Selamat datang di halaman index!";
    }

    public function tos()
    {
        return "Ini adalah halaman Terms of Service (TOS).";
    }

    public function biodata()
    {
        return "<h2>Biodata Mahasiswa</h2>"
            . "<p><strong>Nama:</strong> FAIZA AZKA WAHYU RAMADHAN</p>"
            . "<p><strong>NIM:</strong> 4123023</p>"
            . "<p><strong>Program Studi:</strong> SISTEM INFORMASI</p>"
            . "<p><strong>Fakultas:</strong> SAINS DAN TEKNOLOGI</p>"
            . "<p><strong>Universitas:</strong> UNIVERSITAS PESANTREN TINGGI DARUL ULUM</p>"
            . "<p><strong>Email:</strong> faizaazkawahyuramadhan@email.com</p>";
    }
}
