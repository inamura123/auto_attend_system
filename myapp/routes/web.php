<?php

use App\Http\Controllers\ProfileController;
use App\Models\Templete;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TempleteController;

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

// Route::get('/', function () {
//     $templetes = Templetes::orderBy('created_at', 'asc')->get();
//     return view('templetes',[
//         'templetes' => $templetes
//     ]);
// })->middleware(['auth'])->name('home');
// Route::resource('templete', TempleteController::class, ['except' => ['show']]);

Route::controller(TempleteController::class)->prefix('templete')->name('templete')->group(function() {
    Route::get('/', 'list');
    Route::get('/create', 'create')->name('.create');
    Route::post('/create', 'store')->name('.store');
    Route::get('/edit/{templete_id}', 'edit')->name('.edit');
    Route::get('/delete/{templete_id}', 'delete')->name('.delete');
    Route::post('/update/{templete_id}', 'update')->name('.update');
    // Route::put('/{templete}', 'update')->name('.update');
    // Route::delete('/{templete}', 'destroy')->name('.destroy');
});


// Route::post('/templete', function (Request $request) {
    
//     $objDateTime = new DateTime();
    
//     $templetes = new Templete;
  
//     $templetes ->name = $request->name;
//     $templetes->week = $request->week;
//     $templetes->start_hour = $request->start_hour;
//     $templetes->start_minute = $request->start_minute;
//     $templetes->end_hour = $request->end_hour;
//     $templetes->end_minute = $request->end_minute;
//     $templetes->late_minute = $request->late_minute;
//     $templetes->timestamps = false;
//     $templetes->save(); 
//     return redirect('/test');
// });



Route::get('/', function () {
    return view('templete');
})->middleware(['auth'])->name('home');

// Route::post('/templetes', function (Request $request) {

    //以下に登録処理を記述（Eloquentモデル）

  // Eloquentモデル
//   $templetes = new Templete;
  
//   $templetes ->name = $request->name;
//   $templetes->week = $request->week;
//   $templetes->start_hour = $request->start_hour;
//   $templetes->start_minute = $request->start_minute;
//   $templetes->end_hour = $request->end_hour;
//   $templetes->end_minute = $request->end_minute;
//   $templetes->late_minute = $request->late_minute;
//   $templetes->save(); 
//   return redirect('/');

// });

// Route::delete('/templetes/{templetes}', function (Templete $templete) {
    // $templete->delete();       //追加
    // return redirect('/');  //追加
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
