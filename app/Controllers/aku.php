<?php

namespace App\Controllers;

class aku extends BaseController
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
}
