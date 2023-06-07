<?php
use App\Http\Controllers\Admin\SigninController;
use App\Http\Controllers\Admin\SignupController;
use App\Http\Controllers\Admin\DetailKedudukanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\DetailPengumumanController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\DetailPengaduanController;
use App\Http\Controllers\Admin\ResponPengaduanController;
use App\Http\Controllers\Admin\PostinganController;
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


// Route::prefix('')->group(function () {
//     Route::middleware('')->group(function () {
// Route::redirect('/', 'signin.index');
Route::resource('/dashboard', DashboardController::class);
Route::resource('/signin', SigninController::class);
Route::resource('/signup', SignupController::class);
Route::resource('/detail_kedudukan', DetailKedudukanController::class);
Route::resource('/pengumuman', PengumumanController::class);
Route::resource('/detail_pengumuman', DetailPengumumanController::class);
Route::resource('/pengaduan', PengaduanController::class);
Route::resource('/detail_pengaduan', DetailPengaduanController::class);
Route::resource('/respon_pengaduan', ResponPengaduanController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/postingan', PostinganController::class);

//     });
// });

// Route::prefix('/pengumuman')->group(function () {
//     Route::get('/', [PengumumanController::class, 'index'])->name('pengumuman.index');
//     Route::get('/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
//     Route::post('/', [PengumumanController::class, 'store'])->name('pengumuman.store');
//     Route::get('/{pengumuman}', [PengumumanController::class, 'show'])->name('pengumuman.show');
//     Route::get('/{pengumuman}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
//     Route::patch('/{pengumuman}', [PengumumanController::class, 'update'])->name('pengumuman.update');
//     Route::delete('/{pengumuman}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');
// });
