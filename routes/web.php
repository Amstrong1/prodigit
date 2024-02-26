<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', function () {
    return view('feed/index');
});

Route::get('/formations', function () {
    return view('formations/index');
});

Route::get('/maintenance-referencement', function () {
    return view('maintenance-referencement/index');
});

Route::get('/tarifs', function () {
    return view('tarifs/index');
});

Route::get('/blog', function () {
    return view('blog/index');
});

Route::get('/contact', function () {
    return view('contact/index');
});

Route::post('/contact', [AppController::class, 'contact']);

Route::get('/mon-projet', function () {
    return view('mon-projet/index');
});

Route::post('/mon-projet', [AppController::class, 'projet']);

Route::get('/comment-ca-marche', function () {
    return view('comment-ca-marche/index');
});

Route::get('/foire-aux-questions', function () {
    return view('foire-aux-questions/index');
});

Route::get('/nous-rejoindre', function () {
    return view('nous-rejoindre/index');
});

Route::get('/page-introuvable', function () {
    return view('page-introuvable/index');
});

Route::get('/devenir-partenaire', function () {
    return view('devenir-partenaire/index');
});

Route::get('/politique-de-confidentialite', function () {
    return view('politique-de-confidentialite/index');
});

Route::get('/mentions-legales', function () {
    return view('mentions-legales/index');
});

Route::get('/google-my-business', function () {
    return view('google-my-business/index');
});

Route::get('/trouver-un-client', function () {
    return view('trouver-un-client/index');
});

Route::get('/realisations', function () {
    return view('realisations/index');
});