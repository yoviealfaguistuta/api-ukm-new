<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\artikelhitController;
use App\Http\Controllers\artikelkategoriController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\newshitController;
use App\Http\Controllers\newskategoriController;
use App\Http\Controllers\dokumenController;
use App\Http\Controllers\dokumenitemController;
use App\Http\Controllers\imagegalleriController;
use App\Http\Controllers\imageitemgalleriController;
use App\Http\Controllers\videogalleriController;
use App\Http\Controllers\videoitemgalleriController;
use App\Http\Controllers\staticpageController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\menuController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('ukm')->group(function () {
    Route::get('/', [UkmController::class, 'list'])->name('List'); // Daftar UKM
    Route::get('/{id_ukm}', [UkmController::class, 'detail']); // Detail Data UKM
});

Route::prefix('artikelkategori')->group(function () {
    Route::get('/', [artikelkategoriController::class, 'list']); // Daftar artikelkategori
    Route::get('/{id_kategori}', [artikelkategoriController::class, 'detail']); // Detail Data artikelkategori
});

Route::prefix('artikel')->group(function () {
    Route::get('/', [artikelController::class, 'list']); // Daftar artikel
    Route::get('/{id_artikel}', [artikelController::class, 'detail']); // Detail Data artikel
});

Route::prefix('artikelhit')->group(function () {
    Route::get('/', [artikelhitController::class, 'list']); // Daftar artikelhit
    Route::get('/{id_artikel_hit}', [artikelhitController::class, 'detail']); // Detail Data artikelhit
});

Route::prefix('newskategori')->group(function () {
    Route::get('/', [newsController::class, 'list']); // Daftar news
    Route::get('/{id_news}', [newsController::class, 'detail']); // Detail Data news
   
});

Route::prefix('news')->group(function () {
    Route::get('/', [newsController::class, 'list']); // Daftar news
    Route::get('/{id_news}', [newsController::class, 'detail']); // Detail Data news
});

Route::prefix('newshit')->group(function () {
    Route::get('/', [newshitController::class, 'list']); // Daftar newshit
    Route::get('/{id_news_hit}', [newshitController::class, 'detail']); // Detail Data newshit
});

Route::prefix('dokumen')->group(function () {
    Route::get('/', [dokumenController::class, 'list']); // Daftar dokumen
    Route::get('/{id_dokumen}', [dokumenController::class, 'detail']); // Detail Data dokumen
});

Route::prefix('dokumenitem')->group(function () {
    Route::get('/', [dokumenitemController::class, 'list']); // Daftar dokumenitem
    Route::get('/{id_dokumen}', [dokumenitemController::class, 'detail']); // Detail Data dokumenitem

});
Route::prefix('imagegalleri')->group(function () {
    Route::get('/', [imagegalleriController::class, 'list']); // Daftar imagegalleri
    Route::get('/{id_image_galleri}', [imagegalleriController::class, 'detail']); // Detail Data imagegalleri
});

Route::prefix('image')->group(function () {
    Route::get('/', [imageitemgalleriController::class, 'list']); // Daftar image
    Route::get('/{id_image}', [imageitemgalleriController::class, 'detail']); // Detail Data image
});

Route::prefix('videogalleri')->group(function () {
    Route::get('/', [videogalleriController::class, 'list']); // Daftar videogalleri
    Route::get('/{id_video_galleri}', [videogalleriController::class, 'detail']); // Detail Data videogalleri

});

Route::prefix('video')->group(function () {
    Route::get('/', [videoitemgalleriController::class, 'list']); // Daftar video
    Route::get('/{id_video}', [videoitemgalleriController::class, 'detail']); // Detail Data video
});


Route::prefix('staticpage')->group(function () {
    Route::get('/', [staticpageController::class, 'list']); // Daftar staticpage
    Route::get('/{id_static_page}', [staticpageController::class, 'detail']); // Detail Data staticpage

});

Route::prefix('menu')->group(function () {
    Route::get('/', [menuController::class, 'list']); // Daftar menu
    Route::get('/{id_menu}', [menuController::class, 'detail']); // Detail Data menu
  
    
});
// Route::get('/artikel', [artikelController::class, 'index']);
// // Route::get('/artikel{id}', [artikelController::class, 'show']);

// Route::get('/artikel_hit', [artikelhitController::class, 'index']);
// // Route::get('/artikel_hit{id}', [artikelhitController::class, 'show']);


// Route::get('/artikel_kategori', [artikelkategoriController::class, 'index']);
// Route::post('/artikel_kategori', [artikelkategoriController::class, 'store']);
// Route::get('/artikel_kategori/{id}', [artikelkategoriController::class, 'show']);
// Route::post('/artikel_kategori/{id}', [artikelkategoriController::class, 'update']);
// Route::delete('/artikel_kategori/{id}', [artikelkategoriController::class, 'delete']);

require_once "public.php";
























Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']); 

});



