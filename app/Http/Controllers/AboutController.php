<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return 'Halaman ini menampilkan informasi mengenai perusahaan';
    }
}
