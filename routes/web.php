<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');

Route::get('/catalog/show/{id}', [CatalogController::class, 'show'])->name('show');

Route::post('/catalog/show/{id}/description', [CatalogController::class, 'description'])->name('description');

Route::get('/support', [SupportController::class, 'index'])->name('support');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');

Route::post('/admin/store_course', [AdminController::class, 'store_course'])->name('store_course');

Route::post('/admin/store_lesson', [AdminController::class, 'store_lesson'])->name('store_lesson');

Route::post('/admin/destroy/course/{id}', [AdminController::class, 'destroy_course'])->name('destroy_course');

Route::post('/admin/destroy/lesson/{id}', [AdminController::class, 'destroy_lesson'])->name('destroy_lesson');

Route::get('/course/{course_id}/lessons', [LessonsController::class, 'index'])->name('lessons');

Route::get('/course/{course_id}/lessons/{name}', [LessonController::class, 'index'])->name('lesson');

Route::post('/end/course/{course_id}/lesson/{id}', [LessonController::class, 'updateRank'])->name('updateRank');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::post('/profile/{id}', [ProfileController::class, 'updateStatus'])->name('updateStatus');

Route::get('/edit_profile', [EditProfileController::class, 'index'])->name('edit_profile');

Route::put('/edit_profile', [EditProfileController::class, 'update'])->name('update');

require_once __DIR__ . '/auth.php';
