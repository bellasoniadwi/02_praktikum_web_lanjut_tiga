<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($berita){
        return 'Halaman ini menampilkan berita seputar '.$berita;
    }
}
