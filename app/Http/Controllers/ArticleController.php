<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles   ($id = null)
    {
        return 'Halaman Artikel ' . ($id ? $id : 'No ID');
    }
}

