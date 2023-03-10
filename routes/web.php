<?php

use App\Events\Message;
use App\Http\Controllers\SendMessageController;
use Illuminate\Support\Facades\Request;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/send-message', function (Request $request) {
 
//     event(new Message($request->username, $request->message));
// });

Route::post('/send-message',[SendMessageController::class,'send_message']);
