<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerBook;
//route home
Route::get('/admin', [ControllerAdmin::class, 'index'])->name('admin');
Route::get('/admin/quan-ly-ve', [ControllerAdmin::class, 've']);
Route::get('/admin/quan-ly-loai', [ControllerAdmin::class, 'loaive'])->name('loaive');
Route::get('/admin/xoa-loai/{id}', [ControllerAdmin::class, 'xoaloai']);
Route::get('/admin/cap-nhat-loai/{id}', [ControllerAdmin::class, 'edit_loai']);
Route::post('/admin/cap-nhat-loai/{id}', [ControllerAdmin::class, 'edit_loai_db']);
Route::get('/admin/them-loai-ve', [ControllerAdmin::class, 'themloai']);
Route::post('/admin/them-loai-ve', [ControllerAdmin::class, 'themloai_db']);
Route::get('/admin/xem-chi-tiet-ve/{id}', [ControllerAdmin::class, 'vechitiet']);
Route::get('/admin/lich-su-thanh-toan', [ControllerAdmin::class, 'thanhtoan']);
Route::get('/admin/danh-sach-khach-hang', [ControllerAdmin::class, 'users']);
Route::get('/admin/danh-sach-su-kien', [ControllerAdmin::class, 'sukien'])->name('admin_sukien');
Route::get('/admin/them-su-kien', [ControllerAdmin::class, 'add_sukien']);
Route::post('/admin/them-su-kien', [ControllerAdmin::class, 'add_sukien_db']);
Route::get('/admin/cap-nhat-su-kien/{id}', [ControllerAdmin::class, 'edit_sukien']);
Route::post('/admin/cap-nhat-su-kien/{id}', [ControllerAdmin::class, 'edit_sukien_db']);
Route::get('/admin/xoa-su-kien/{id}', [ControllerAdmin::class, 'delete_sukien']);


//route nguoi dung
Route::get('/', [ControllerHome::class, 'index'])->name('home');
Route::get('/pdf', [ControllerHome::class, 'pdf']);
Route::post('/', [ControllerBook::class, 'booking']);
Route::get('/lien-he', [ControllerHome::class, 'lienhe'])->name('lienhe');
Route::post('/lien-he', [ControllerHome::class, 'sendmail']);
Route::get('/su-kien', [ControllerHome::class, 'sukien']);
Route::get('/su-kien-chi-tiet', [ControllerHome::class, 'sukienct']);
Route::get('/thanh-toan', [ControllerHome::class, 'thanhtoan'])->name('thanhtoan');
Route::post('/thanh-toan', [ControllerBook::class, 'pay']);
Route::get('/in-ve/{id}', [ControllerBook::class, 'inve']);
Route::get('/thanh-toan-thanh-cong', [ControllerHome::class, 'thanhcong'])->name('tc');