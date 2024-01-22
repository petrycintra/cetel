<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CursopresencialController;
use App\Http\Controllers\IndexpageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

////////////////////////////////
Route::get('/login', [Controller::class, 'login'])->name('login.form');
Route::post('/auth', [Controller::class, 'auth'])->name('login.auth');
Route::post('/loginedit', [Controller::class, 'loginedit'])->name('login.edit');
Route::get('/sair', [Controller::class, 'destroy'])->name('sair');
Route::get('/insta', [Controller::class, 'insta'])->name('insta');

////////////////////////////////
Route::get('/', [IndexpageController::class, 'index'])->name('index');
Route::get('/indexedit', [IndexpageController::class, 'indexedit'])->name('indexedit');
Route::post('/indexedit_update', [IndexpageController::class, 'indexedit_update'])->name('indexedit_update');

////////////////////////////////
Route::get('/cursopresencial', [CursopresencialController::class, 'cursopresencial'])->name('cursopresencial');
Route::get('/cursopresencialedit', [CursopresencialController::class, 'cursopresencialedit'])->name('cursopresencialedit');
Route::get('/cursopresencialedit_{id?}', [CursopresencialController::class, 'cursopresencialedit_id'])->name('cursopresencialedit_id');
Route::post('/cursopresencialedit_update', [CursopresencialController::class, 'cursopresencialedit_update'])->name('cursopresencialedit_update');
Route::get('/gradecurricularedit', [CursopresencialController::class, 'gradecurricularedit'])->name('gradecurricularedit');
Route::get('/gradecurricularedit_{id?}', [CursopresencialController::class, 'gradecurricularedit_id'])->name('gradecurricularedit_id');
Route::post('/gradecurricularedit_update', [CursopresencialController::class, 'gradecurricularedit_update'])->name('gradecurricularedit_update');

Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

////////////////////////////////
Route::get('/corpodocente', [Controller::class, 'corpodocente'])->name('corpodocente');
Route::get('/corpodocenteadicionar', [Controller::class, 'corpodocenteadicionar'])->name('corpodocenteadicionar');
Route::POST('/corpodocenteadicionar_create', [Controller::class, 'corpodocenteadicionar_create'])->name('corpodocenteadicionar_create');
Route::get('/corpodocenteedit', [Controller::class, 'corpodocenteedit'])->name('corpodocenteedit');
Route::get('/corpodocenteedit_{id?}', [Controller::class, 'corpodocenteedit_id'])->name('corpodocenteedit_id');
Route::post('/corpodocenteedit_update', [Controller::class, 'corpodocenteedit_update'])->name('corpodocenteedit_update');

Route::get('/cursos', [CursoController::class, 'curso'])->name('curso');

Route::get('/faqedit', [FaqController::class, 'faqedit'])->name('faqedit');

Route::get('/boletoaluno', [Controller::class, 'boletoaluno'])->name('boletoaluno');
Route::post('/boletoaluno_create', [Controller::class, 'boletoaluno_create'])->name('boletoaluno_create');

Route::get('/boletos', [Controller::class, 'boletos'])->name('boletos');
Route::post('/boletos_search', [Controller::class, 'boletos_search'])->name('boletos_search');

Route::post('/formwapp', [Controller::class, 'formwapp'])->name('formwapp');