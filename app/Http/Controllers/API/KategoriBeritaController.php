<?php

namespace App\Http\Controllers\API;

use OA\Get;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriBeritaController extends Controller
{
        /**
    *    @Get(
    *       path="/berita",
    *       tags={"Berita"},
    *       operationId="kategoriBerita",
    *       summary="Kategori Berita",
    *       description="Mengambil Data Kategori Berita",
    *      
    */
    // public function listKategoriBerita() {
    //     return 'true';
    // }
    
    public function index() {
        return 'ading';
    }

}
