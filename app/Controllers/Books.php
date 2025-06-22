<?php

namespace App\Controllers;

use App\Models\BookModel;

class Books extends BaseController
{
    protected $bookModel;

    public function __construct()
    {
        $this->bookModel = new BookModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Koleksi Manga Premium',
            'books' => $this->bookModel->getBook()
        ];
        return view('books/index', $data);
    }

    public function detail($slug)
    {
        $book = $this->bookModel->getBook($slug);

        if (empty($book)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Judul buku $slug tidak ditemukan.");
        }

        $data = [
            'title' => 'Detail Buku',
            'book' => $book
        ];

        return view('books/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Buku',
            'validation' => \Config\Services::validation()
        ];

        return view('books/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[books.judul]',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah terdaftar.'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => ['required' => 'Penulis harus diisi']
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => ['required' => 'Penerbit harus diisi']
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar (max 1MB)',
                    'is_image' => 'File harus berupa gambar',
                    'mime_in' => 'Format gambar tidak didukung'
                ]
            ]
        ])) {
            return redirect()->to('/books/create')->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.jpg';
        } else {
            $namaSampul = $fileSampul->getRandomName();
            $fileSampul->move('assets/img/books', $namaSampul);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bookModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/books');
    }

    public function delete($id)
    {
        $book = $this->bookModel->find($id);
        if ($book['sampul'] != 'default.jpg') {
            unlink('assets/img/books/' . $book['sampul']);
        }

        $this->bookModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/books');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Buku',
            'validation' => \Config\Services::validation(),
            'book' => $this->bookModel->getBook($slug)
        ];

        return view('books/edit', $data);
    }

    public function update($id)
    {
        $bookLama = $this->bookModel->getBook($this->request->getVar('slug'));
        $rule_judul = ($bookLama['judul'] == $this->request->getVar('judul')) ? 'required' : 'required|is_unique[books.judul]';

        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah terdaftar.'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => ['required' => 'Penulis harus diisi']
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => ['required' => 'Penerbit harus diisi']
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar (max 1MB)',
                    'is_image' => 'File harus berupa gambar',
                    'mime_in' => 'Format gambar tidak didukung'
                ]
            ]
        ])) {
            return redirect()->to('/books/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            $namaSampul = $fileSampul->getRandomName();
            $fileSampul->move('assets/img/books', $namaSampul);
            if ($this->request->getVar('sampulLama') != 'default.jpg') {
                unlink('assets/img/books/' . $this->request->getVar('sampulLama'));
            }
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bookModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/books');
    }
}
