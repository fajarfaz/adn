<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::where('users_id',auth()->user()->id)->get();
        return Inertia::render(
            'Produk/Index', 
            [
                'data' => $produks;
            ]
        );
    }
}
