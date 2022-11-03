<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Private\NewsController;
use App\Http\Controllers\Private\UkmController;
use App\Http\Controllers\Private\AgendaController;
use App\Http\Controllers\Private\AnnouncementController;
use App\Http\Controllers\Private\DashboardController;
use App\Http\Controllers\Private\GalleryImageController;
use App\Http\Controllers\Private\GalleryVideoController;
use App\Http\Controllers\Private\NewsCategoryController;
use App\Http\Controllers\Private\UsersController;

Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::prefix('private')->group(function () {

        Route::prefix('dashboard')->group(function () {
            Route::get('/', [DashboardController::class, 'dashboard']);
        });
        
        Route::prefix('news-category')->group(function () {
            Route::get('/', [NewsCategoryController::class, 'list']);
            Route::get('/{news_category_id}', [NewsCategoryController::class, 'detail']);
            Route::post('/', [NewsCategoryController::class, 'create']);
            Route::post('/{news_category_id}', [NewsCategoryController::class, 'update']);
            Route::delete('/{news_category_id}', [NewsCategoryController::class, 'delete']);
        });
    
        Route::prefix('news')->group(function () {
            Route::get('/', [NewsController::class, 'list']);
            Route::post('/', [NewsController::class, 'create']);
            Route::get('/{news_id}', [NewsController::class, 'detail']);
            Route::post('/{news_id}', [NewsController::class, 'update']);
            Route::delete('/{news_id}', [NewsController::class, 'delete']);
        });

        Route::prefix('gallery-image')->group(function () {
            Route::get('/', [GalleryImageController::class, 'list']);
            Route::post('/', [GalleryImageController::class, 'create']);
            Route::get('/{gallery_image_id}', [GalleryImageController::class, 'detail']);
            Route::post('/{gallery_image_id}', [GalleryImageController::class, 'update']);
            Route::delete('/{gallery_image_id}', [GalleryImageController::class, 'delete']);
        });

        Route::prefix('gallery-video')->group(function () {
            Route::get('/', [GalleryVideoController::class, 'list']);
            Route::post('/', [GalleryVideoController::class, 'create']);
            Route::get('/{gallery_video_id}', [GalleryVideoController::class, 'detail']);
            Route::post('/{gallery_video_id}', [GalleryVideoController::class, 'update']);
            Route::delete('/{gallery_video_id}', [GalleryVideoController::class, 'delete']);
        });

        Route::prefix('announcement')->group(function () {
            Route::get('/', [AnnouncementController::class, 'list']);
            Route::get('/{announcement_id}', [AnnouncementController::class, 'detail']);
            Route::post('/{announcement_id}', [AnnouncementController::class, 'update']);
            Route::post('/', [AnnouncementController::class, 'create']);
            Route::delete('/{announcement_id}', [AnnouncementController::class, 'delete']);
        });

        Route::prefix('agenda')->group(function () {
            Route::get('/', [AgendaController::class, 'list']);
            Route::get('/{agenda_id}', [AgendaController::class, 'detail']);
            Route::post('/{agenda_id}', [AgendaController::class, 'update']);
            Route::post('/', [AgendaController::class, 'create']);
            Route::delete('/{agenda_id}', [AgendaController::class, 'delete']);
        });

        Route::prefix('ukm')->group(function () {
            Route::get('/', [UkmController::class, 'detail']);
            Route::post('/', [UkmController::class, 'update']);
            // Route::post('/', [AnnouncementController::class, 'create']);
        });

        

        Route::prefix('users')->group(function () {
            Route::get('/profile', [UsersController::class, 'profile']);
            Route::post('/profile', [UsersController::class, 'update']);
            Route::post('/tambah-anggota', [UsersController::class, 'create']);
            Route::delete('/delete-anggota/{id_users}', [UsersController::class, 'delete_anggota']);
            // Route::post('/', [AnnouncementController::class, 'create']);
        });


        // // Route::prefix('ukm')->group(function () {
        // //     Route::patch('/{id_ukm}', [UkmController::class, 'update']); // Memperbarui UKM
        // //     Route::post('/{id_ukm}', [UkmController::class, 'create']); // Membuat data UKM baru
        // //     Route::delete('/{id_ukm}', [UkmController::class, 'delete']); // Menghapus data UKM
        // // });
    
        // Route::prefix('artikelkategori')->group(function () {
    
        //     Route::patch('/{id_kategori}', [artikelkategoriController::class, 'update']); // Memperbarui artikelkategori
        //     Route::post('/{id_kategori}', [artikelkategoriController::class, 'create']); // Membuat data artikelkategori baru
        //     Route::delete('/{id_kategori}', [artikelkategoriController::class, 'delete']); // Menghapus data artikelkategori
        // });
    
        // Route::prefix('artikel')->group(function () {
    
        //     Route::patch('/{id_artikel}', [artikelController::class, 'update']); // Memperbarui artikel
        //     Route::post('/{id_artikel}', [artikelController::class, 'create']); // Membuat data artikel baru
        //     Route::delete('/{id_artikel}', [artikelController::class, 'delete']); // Menghapus data artikel
        // });
    
        // Route::prefix('artikelhit')->group(function () {
    
        //     Route::patch('/{id_artikel_hit}', [artikelhitController::class, 'update']); // Memperbarui artikelhit
        //     Route::post('/{id_artikel_hit}', [artikelhitController::class, 'create']); // Membuat data artikelhit baru
        //     Route::delete('/{id_artikel_hit}', [artikelhitController::class, 'delete']); // Menghapus data artikelhit
        // });
    
        
    
        // Route::prefix('newshit')->group(function () {
    
        //     Route::patch('/{id_news_hit}', [newshitController::class, 'update']); // Memperbarui newshit
        //     Route::post('/{id_news_hit}', [newshitController::class, 'create']); // Membuat data newshit baru
        //     Route::delete('/{id_news_hit}', [newshitController::class, 'delete']); // Menghapus data newshit
        // });
    
        // Route::prefix('dokumen')->group(function () {
    
        //     Route::patch('/{id_dokumen}', [dokumenController::class, 'update']); // Memperbarui dokumen
        //     Route::post('/{id_dokumen}', [dokumenController::class, 'create']); // Membuat data dokumen baru
        //     Route::delete('/{id_dokumen}', [dokumenController::class, 'delete']); // Menghapus data dokumen
        // });
    
        // Route::prefix('dokumenitem')->group(function () {
    
        //     Route::patch('/{id_dokumen}', [dokumenitemController::class, 'update']); // Memperbarui dokumenitem
        //     Route::post('/{id_dokumen}', [dokumenitemController::class, 'create']); // Membuat data dokumenitem baru
        //     Route::delete('/{id_dokumen}', [dokumenitemController::class, 'delete']); // Menghapus data dokumenitem
        // });
    
    
        // Route::prefix('imagegalleri')->group(function () {
    
        //     Route::patch('/{id_image_galleri}', [imagegalleriController::class, 'update']); // Memperbarui imagegalleri
        //     Route::post('/{id_image_galleri}', [imagegalleriController::class, 'create']); // Membuat data imagegalleri baru
        //     Route::delete('/{id_image_galleri}', [imagegalleriController::class, 'delete']); // Menghapus data imagegalleri
        // });
    
        // Route::prefix('image')->group(function () {
    
        //     Route::patch('/{id_image}', [imageitemgalleriController::class, 'update']); // Memperbarui image
        //     Route::post('/{id_image}', [imageitemgalleriController::class, 'create']); // Membuat data image baru
        //     Route::delete('/{id_image}', [imageitemgalleriController::class, 'delete']); // Menghapus data image
        // });
    
        // Route::prefix('videogalleri')->group(function () {
    
        //     Route::patch('/{id_video_galleri}', [videogalleriController::class, 'update']); // Memperbarui videogalleri
        //     Route::post('/{id_video_galleri}', [videogalleriController::class, 'create']); // Membuat data videogalleri baru
        //     Route::delete('/{id_video_galleri}', [videogalleriController::class, 'delete']); // Menghapus data videogalleri
        // });
    
        // Route::prefix('video')->group(function () {
    
        //     Route::patch('/{id_video}', [videoitemgalleriController::class, 'update']); // Memperbarui video
        //     Route::post('/{id_video}', [videoitemgalleriController::class, 'create']); // Membuat data video baru
        //     Route::delete('/{id_video}', [videoitemgalleriController::class, 'delete']); // Menghapus data video
        // });
    
        // Route::prefix('staticpage')->group(function () {
    
        //     Route::patch('/{id_static_page}', [staticpageController::class, 'update']); // Memperbarui staticpage
        //     Route::post('/{id_static_page}', [staticpageController::class, 'create']); // Membuat data staticpage baru
        //     Route::delete('/{id_static_page}', [staticpageController::class, 'delete']); // Menghapus data staticpage
        // });
    
        // Route::prefix('menu')->group(function () {
    
        //     Route::patch('/{id_menu}', [menuController::class, 'update']); // Memperbarui menu
        //     Route::post('/{id_menu}', [menuController::class, 'create']); // Membuat data menu baru
        //     Route::delete('/{id_menu}', [menuController::class, 'delete']); // Menghapus data staticpage
        //     Route::get('/allmenu', [menuController::class, 'allmenu']);
        // });
    });

});
