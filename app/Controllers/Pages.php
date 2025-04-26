<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['tes'] = 'Selamat Datang di halaman Home!';
        return view('pages/home', $data);
    }

    public function about()
    {
        $data['title'] = 'About';
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data['title'] = 'Contact';
        $data['alamat'] = [
            ["tipe" => "Rumah", "alamat" => "Jl. Melati No. 12", "kota" => "Jombang"],
            ["tipe" => "Kantor", "alamat" => "Jl. Mawar No. 5", "kota" => "Surabaya"]
        ];
        return view('pages/contact', $data);
    }
}
