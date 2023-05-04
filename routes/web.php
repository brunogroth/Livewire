 <?php

use App\Http\Livewire\Calculator;
 use App\Http\Livewire\Todolist;
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

Route::get('/', function() {
    return redirect('/counter');
});
Route::get('/counter', function () {
    return view('welcome');
})->name('counter');

Route::get('/calculator', Calculator::class)->name('calculator');

Route::get('/todolist', Todolist::class)->name('todolist');
