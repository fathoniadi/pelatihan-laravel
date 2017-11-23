<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
    	$data['judul'] = 'article1';
    	$data['deskripsi'] = 'isi artikel';
    	$data['nama'] = ['Thoni', 'Bayu', 'Alvin'];
    	return view('home', $data);
    }

    public function create() {
    	return "Hello ini halaman Create Artikel";
    }

    public function baca($judul) {
    	return $judul;
    }
}
