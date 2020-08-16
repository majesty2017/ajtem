<?php

/*
 *
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/***
 * Welcome pages
***/

//Route::get('/mail', function () {
//    \Illuminate\Support\Facades\Mail::to('email@email.com')->send(new \App\Mail\WelcomeMail());
//   return new \App\Mail\WelcomeMail();
//});

Route::get('/', 'WelcomeController@welcome')->name('welcome');

Route::get('/user/login', 'Auth\LoginController@showLoginForm')->name('user.login');

Route::post('/user/login', 'Auth\LoginController@login')->name('user.login.submit');

//
Route::get('/user/register', 'Auth\RegisterController@showRegistrationForm')->name('user.register');

Route::get('/user/register/next', 'Auth\RegisterController@showRegistrationForm')->name('next');

//
Route::post('/user/register', 'Auth\RegisterController@postRegister')->name('user.register.submit');

Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

/***
 * Home pages only after authentication
 ***/

Auth::routes();

/***
 * Home pages only after authentication
 ***/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutus', 'HomeController@aboutUs')->name('aboutus');

Route::get('/contact', 'HomeController@contactUs')->name('contact');

Route::get('/single', 'HomeController@contactUs')->name('single.article');

Route::get('/submit-article', 'HomeController@submit')->name('submit.article');
//
Route::get('/authorguideline', 'HomeController@authorGuideline')->name('authorguideline');

Route::get('/checkout', 'HomeController@checkout')->name('checkout');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/article/{id}/view', 'HomeController@viewArticle')->name('article.view');

Route::post('/postarticle', 'HomeController@postArticle')->name('article.post');

Route::get('/search', 'SearchController@getResults')->name('article.search');

Route::get('/download', 'HomeController@downloadGuidelines')->name('guideline.download');

/**
 *  Admin Ends
*/

Route::prefix('aj-admin')->group(function () {

    Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');

    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    /**
     *  Admin Dashboard after authentication as admin
     */

    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    Route::get('/dashboard/lockscreen', 'AdminController@getLockScreen')->name('admin.dashboard.lockscreen');

    Route::post('/dashboard/lockscreen', 'AdminController@lockScreen')->name('admin.dashboard.submit');

    Route::get('/categories', 'CategoryController@getCategories')->name('admin.categories');

    Route::post('/categories', 'CategoryController@postCategories')->name('admin.categories.submit');

    Route::post('/categories/update', 'CategoryController@updateCategory')->name('admin.categories.update');

    Route::post('/categories/delete', 'CategoryController@deleteCategory')->name('admin.categories.delete');

    Route::get('/articles', 'ArticleController@getArticle')->name('admin.articles');

    Route::post('/articles', 'ArticleController@postArticle')->name('admin.articles.post');

    Route::post('/articles/update', 'ArticleController@updateArticle')->name('admin.articles.update');

    Route::post('/articles/delete', 'ArticleController@deleteArticle')->name('admin.articles.delete');

    Route::post('/articles/publish', 'ArticleController@publishArticle')->name('admin.articles.publish');

    Route::get('/authors', 'AdminController@getAuthors')->name('admin.authors');

    Route::get('/file/{filename}', 'ArticleController@download')->name('download');

//    Slider route
    Route::get('/sliders', 'SliderController@index')->name('slider.index');

    Route::post('/sliders', 'SliderController@create')->name('slider.create');

    Route::post('/sliders/edit', 'SliderController@update')->name('slider.update');

    Route::post('/sliders/destroy', 'SliderController@destroy')->name('slider.destroy');

});

