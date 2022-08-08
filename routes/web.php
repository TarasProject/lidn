<?php

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

use App\Models\Blogpost;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/input', function () {
    return view('input');
});
Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'AboutController@index')->name('about');

Route::get('/portfolio/portfolio', 'ProjectController@index')->name('project');
Route::get('/portfolio/portfolio-details', 'ProjectController@pd')->name('pd');

Route::get('/portfolio/{id}/{slug}.html', 'ProjectController@showPortfolio')->name('showPortfolio');
Route::post('/portfolio/{id}/{slug}.html', 'ProjectController@nextPrev')->name('nextPrev');
Route::post('/portfolio/like', 'ProjectController@likeProject')->name('like');

Route::get('blog/blog', 'BlogpostController@index')->name('blogpost');
Route::get('blog/{id}/{slug}.html', 'BlogpostController@showBlogpost')->name('showBlogpost');

Route::get('contact', 'ContactController@index')->name('contact');

Route::post('contact', 'MailSettingController@sendForm')->name('send');

//Route::get('/portfolio/{id}/{slug}.html', 'ProjectController@next');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
