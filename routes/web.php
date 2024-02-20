<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use App\Models\Announcement;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontController::class, 'welcome'])->name('welcome');

//* rotta per gli annunci
Route::get('/nuovo/annuncio',[AnnouncementController::class,'createAnnouncement'])->name('announcement.create');
//* rotta per lo show delle categorie
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');
//*rotta per il dettaglio dell annuncio card
Route::get('/dettaglio/annuncio/{announcement}',[AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');
//*rotta per l'index 
Route::get('/tutti/annunci',[AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');




//? Rotta home revisore
Route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor.index');
//? Accetta annuncio 
Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class,'acceptAnnouncement'])->name('revisor.accept_announcement');
//? Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class,'rejectAnnouncement'])->name('revisor.reject_announcement');


