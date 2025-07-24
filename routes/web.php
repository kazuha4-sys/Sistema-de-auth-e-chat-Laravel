<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Message;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// Rotas para Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Para rotas de posts tem que ter já ter feito o Auth
Route::middleware('auth')->group(function(){
    Route::resource('posts', PostController::class);
    route::resource('posts', PostController::class);
});

// Para rotas de chat 
route::middleware('auth')->group(function(){
    Route::get('/chat', [MessageController::class, 'index'])->name('chat');
    Route::get('/chat/messages', [MessageController::class, 'fetch'])->name('chat.fetch');
    Route::post('/chat', [MessageController::class, 'store'])->name('chat.store');
});

require __DIR__.'/auth.php';
