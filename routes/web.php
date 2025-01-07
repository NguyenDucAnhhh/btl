<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\DoanhThuKhachHangController;
use App\Http\Controllers\DoanhThuNhanVienController;
// Route::get('/', [NhanVienController::class, 'index'])->name('nhanviens.index');
Route::get('/', [KhachHangController::class, 'index'])->name('khachhangs.index');

Route::get('/nhanviens/ttl', [NhanVienController::class, 'ttl'])->name('nhanviens.ttl');
Route::get('/nhanviens/tt', [NhanVienController::class, 'tt'])->name('nhanviens.tt');



Route::get('/nhanviens/create', [NhanVienController::class, 'create'])->name('nhanviens.create');
Route::post('/nhanviens', [NhanVienController::class, 'store'])->name('nhanviens.store');
Route::get('/nhanviens/{id}', [NhanVienController::class, 'show'])->name('nhanviens.show');
Route::get('/nhanviens/{id}/edit', [NhanVienController::class, 'edit'])->name('nhanviens.edit');
Route::put('/nhanviens/{id}', [NhanVienController::class, 'update'])->name('nhanviens.update');
Route::delete('/nhanviens/{id}', [NhanVienController::class, 'destroy'])->name('nhanviens.destroy');

Route::post('/nhanviens', [NhanVienController::class, 'tts'])->name('nhanviens.tts');




Route::get('/khachhangs/create', [KhachHangController::class, 'create'])->name('khachhangs.create');
Route::post('/khachhangs', [KhachHangController::class, 'store'])->name('khachhangs.store');
Route::get('/khachhangs/{id}', [KhachHangController::class, 'show'])->name('khachhangs.show');
Route::get('/khachhangs/{id}/edit', [KhachHangController::class, 'edit'])->name('khachhangs.edit');
Route::put('/khachhangs/{id}', [KhachHangController::class, 'update'])->name('khachhangs.update');
Route::delete('/khachhangs/{id}', [KhachHangController::class, 'destroy'])->name('khachhangs.destroy');

Route::get('/khachhangs', [KhachHangController::class, 'ttd'])->name('khachhangs.ttd');



Route::get('/doanhthukhachhang', [DoanhThuKhachHangController::class, 'index'])->name('doanhthukhachhang.index');
Route::get('/doanhthunhanvien', [DoanhThuNhanVienController::class, 'index'])->name('doanhthunhanvien.index');