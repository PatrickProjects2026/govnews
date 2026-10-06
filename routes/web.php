<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatGPTController;
use App\Http\Controllers\DashController;


// Route::get('/', [HomeController::class, 'welcome']);
Route::get('all', [HomeController::class, 'welcome']);
Route::get('/'                 , [HomeController::class, 'page1']);
Route::get('premier/{pro}'     , [HomeController::class, 'page2']);
Route::get('mayor/{pro}'       , [HomeController::class, 'page3']);
Route::get('municipal/{pro}'   , [HomeController::class, 'page5']);
Route::get('municipality/{pro}', [HomeController::class, 'page4']);

Route::get('by_cat/{cat}', [HomeController::class, 'by_cat']);
Route::get('by_prov/{cat}', [HomeController::class, 'by_prov']);
Route::get('by_id/{id}', [HomeController::class, 'by_id']);
Route::get('by_status/{id}', [HomeController::class, 'by_status']);
Route::get('find_news/{id}', [HomeController::class, 'find_news']);
Route::get('transfer_news', [HomeController::class, 'transfer_news']);


Route::get('/chat-gpt', [ChatGPTController::class, 'index'])->name('chat-gpt.index');

Route::get('/searchgpt', [ChatGPTController::class, 'search']);
Route::post('/searchgpt', [ChatGPTController::class, 'search']);


Route::get('/advanced_search/{what}', [ChatGPTController::class, 'advanced_search']);
// Route::get('/advanced_search/{what}', [ChatGPTController::class, 'advanced_search']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/buy/{any?}', function () {
    return redirect('buy/' . request()->path());
})->where('any', '.*');

// Route::get('/buy', function () {
//     return redirect()->away('https://www.dotcomafrica.com/buy'); 
// });


// Route::get('buy', function () {
//     return view('buy');
// });

Route::post('add_cart', [HomeController::class, 'add_cart']);

Route::post('contact_/{from}/{name}/{msg}/{to}/{cid}', [HomeController::class, 'contact_']);
Route::get('contact_/{from}/{name}/{msg}/{to}/{cid}', [HomeController::class, 'contact_']);
Route::get('search/{cat}', [HomeController::class, 'search']);
Route::get('search_sub/{cat}/{sub}', [HomeController::class, 'search_sub']);
Route::get('company/{id}', [HomeController::class, 'company']);
Route::post('company/{id}', [HomeController::class, 'company']);
Route::get('json/', [HomeController::class, 'json']);
Route::get('advance/{what}', [HomeController::class, 'advance'])->name('advance');
// Route::get('advance/{what}/{where}', [HomeController::class, 'advance'])->name('advance');

// Route::get('buy', [HomeController::class, 'buy']);
Route::get('add', [HomeController::class, 'add']);

Route::get('contact', [HomeController::class, 'contact']);
Route::post('contact', [HomeController::class, 'contact']);

Route::get('download', [HomeController::class, 'download']);
Route::get('terms', [HomeController::class, 'terms']);

Route::get('Gazette', [HomeController::class, 'Gazette']);
Route::get('Tenders', [HomeController::class, 'Tenders']);
Route::get('News', [HomeController::class, 'News']);

Route::get('Pages/{page}', [HomeController::class, 'Pages']);
Route::get('Info/{page}', [HomeController::class, 'Info']);

Route::get('dash/{id}/{year}', [HomeController::class, 'dash']);
Route::post('dash/{id}/{year}', [HomeController::class, 'dash']);

Route::get('register_login', [HomeController::class, 'register_login']);
Route::post('register_login', [HomeController::class, 'register_login']);


Route::get('register_logout', [HomeController::class, 'register_logout']);


//--------------------------- articles by category----------------------------------------

Route::get('Articles/{cat}', [HomeController::class, 'Articles']);
Route::get('company_by_cat/{cat}', [HomeController::class, 'company_by_cat']);
Route::get('company_bybiz_category/{cat}', [HomeController::class, 'company_bybiz_category']);



//--------------------------- articles by category----------------------------------------



//--------------------------- search api ----------------------------------------


Route::get('/get_cat/{text}', [HomeController::class, 'get_cat']);
Route::get('/get_loc/{text}', [HomeController::class, 'get_loc']);
Route::get('/get_comp/{text}', [HomeController::class, 'get_comp']);
Route::get('/call_words/{text}', [HomeController::class, 'call_words']);

Route::get('/search_what/{text}', [HomeController::class, 'search_what']);
Route::get('/search_where/{text}', [HomeController::class, 'search_where']);
Route::get('/cats', [HomeController::class, 'cats']);

Route::get('/shop/{cat}', [HomeController::class, 'shop']);
Route::post('/checkout/{yes}/{name}/{total}', [HomeController::class, 'checkout']);
Route::get('/checkout/{yes}/{name}/{total}', [HomeController::class, 'checkout']);

Route::get('/email_msg/{from}/{to}/{msg}', [HomeController::class, 'email_msg']);
Route::get('/email_table/{name}/{email}/{msg}/{to}', [HomeController::class, 'email_table']);

Route::get('/advanced_search/{alphabet}/{category}/{province}/{date}/{limit}', [HomeController::class, 'advanced_search']);


//--------------------------- search api ----------------------------------------


Route::post('addtempkeywords', [DashController::class, 'addtempkeywords']);


Route::get('advertise', [HomeController::class, 'advertise']);
Route::post('advertise', [HomeController::class, 'advertise']);