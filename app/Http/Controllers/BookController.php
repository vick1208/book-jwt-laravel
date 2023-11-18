<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class BookController extends Controller
{
    public function getBooks()
    {
        return response()->json([
            'success' => "ok",
            'message' => 'Akan dibuat list buku'
        ]);
    }
}
