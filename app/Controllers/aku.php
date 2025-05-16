<?php

namespace App\Controllers;

class Aku extends BaseController
{
    public function matkul(): string
    {
        return view('faiz/matkul');
    }
    public function hobi(): string
    {
        return view('faiz/hobi');
    }
    public function proyek(): string
    {
        return view('faiz/proyek');
    }
    public function film(): string
    {
        return view('faiz/film');
    }
    public function beranda()
    {
        return view('layout/template', ['halaman' => view('halaman/beranda')]);
    }
    public function daftargame()
    {
        return view('layout/template', ['halaman' => view('halaman/daftargame')]);
    }
    public function caratopup()
    {
        return view('layout/template', ['halaman' => view('halaman/caratopup')]);
    }
}
