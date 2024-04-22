<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/support', [SupportController::class, 'index'])->name('support');
Route::get('/about_us', [AboutUsController::class, 'index'])->name('about_us');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin/store_course', [AdminController::class, 'store_course'])->name('store_course');
Route::post('/admin/store_lesson', [AdminController::class, 'store_lesson'])->name('store_lesson');
Route::get('/lessons/{course_id}', [LessonsController::class, 'index'])->name('lessons');
// Route::get('/lesson/{course_id}/{id}', [LessonsController::class, 'lesson'])->name('lesson');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/edit_profile', [EditProfileController::class, 'index'])->name('edit_profile');
Route::post('/edit_profile', [EditProfileController::class, 'store_data'])->name('store_data');

require_once __DIR__ . '/auth.php';
