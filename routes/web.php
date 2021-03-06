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

Route::get('/', 'WelcomeController@welcome')->name('welcome');

Route::get('/user/login', 'Auth\LoginController@showLoginForm')->name('user.login');

Route::post('/user/login', 'Auth\LoginController@login')->name('user.login.submit');

//
Route::get('/user/register', 'Auth\RegisterController@showRegistrationForm')->name('user.register');

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

Route::get('/submit-manuscript', 'HomeController@submit')->name('submit.article');
//
Route::get('/authorguideline', 'HomeController@authorGuideline')->name('authorguideline');

Route::get('/checkout', 'HomeController@checkout')->name('checkout');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/manuscript/{id}/view', 'HomeController@viewArticle')->name('article.view');

Route::post('/postmanuscript', 'HomeController@postArticle')->name('article.post');

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

//    Editor In Chief route
    Route::get('/editor-in-chiefs', 'EditorInChiefController@index')->name('editorinchief.index');

    Route::post('/editor-in-chiefs', 'EditorInChiefController@create')->name('editorinchief.create');

    Route::post('/editor-in-chiefs/edit', 'EditorInChiefController@update')->name('editorinchief.update');

    Route::post('/editor-in-chiefs/destroy', 'EditorInChiefController@destroy')->name('editorinchief.destroy');

//    Editorial Board route
    Route::get('/editorial-boards', 'EditorialBoardController@index')->name('editorialboard.index');

    Route::post('/editorial-boards', 'EditorialBoardController@create')->name('editorialboard.create');

    Route::post('/editorial-boards/edit', 'EditorialBoardController@update')->name('editorialboard.update');

    Route::post('/editorial-boards/destroy', 'EditorialBoardController@destroy')->name('editorialboard.destroy');

//    Copy Editor route
    Route::get('/copy-editors', 'CopyEditorController@index')->name('copyeditor.index');

    Route::post('/copy-editors', 'CopyEditorController@create')->name('copyeditor.create');

    Route::post('/copy-editors/edit', 'CopyEditorController@update')->name('copyeditor.update');

    Route::post('/copy-editors/destroy', 'CopyEditorController@destroy')->name('copyeditor.destroy');

//    Associate Editor route
    Route::get('/associate-editors', 'AssociateEditorController@index')->name('associateeditor.index');

    Route::post('/associate-editors', 'AssociateEditorController@create')->name('associateeditor.create');

    Route::post('/associate-editors/edit', 'AssociateEditorController@update')->name('associateeditor.update');

    Route::post('/associate-editors/destroy', 'AssociateEditorController@destroy')->name('associateeditor.destroy');

//    Reviewer route
    Route::get('/reviewers', 'ReviewerController@index')->name('reviewer.index');

    Route::post('/reviewers', 'ReviewerController@create')->name('reviewer.create');

    Route::post('/reviewers/edit', 'ReviewerController@update')->name('reviewer.update');

    Route::post('/reviewers/destroy', 'ReviewerController@destroy')->name('reviewer.destroy');

});

// Editorial Board
Route::prefix('aj-editorial')->group(function () {

   Route::get('/', 'Auth\EditorialBoardLoginController@showLoginForm')->name('editorial.login');

   Route::post('/', 'Auth\EditorialBoardLoginController@login')->name('editorial.login.submit');

    Route::get('/logout', 'Auth\EditorialBoardLoginController@logout')->name('editorial.logout');

   Route::get('/dashboard', 'EditorialBoardHomeController@index')->name('editorial.dashboard');

});

// Editor in cheif
Route::prefix('aj-editorinchief')->group(function () {

   Route::get('/', 'Auth\EditorInChiefLoginController@showLoginForm')->name('editorinchief.login');

   Route::post('/', 'Auth\EditorInChiefLoginController@login')->name('editorinchief.login.submit');

    Route::get('/logout', 'Auth\EditorInChiefLoginController@logout')->name('editorinchief.logout');

   Route::get('/dashboard', 'EditorInChiefHomeController@index')->name('editorinchief.dashboard');

   Route::get('/manuscript', 'EditorInChiefHomeController@getReviewer')->name('editorinchief.manuscript');

   Route::post('/manuscript', 'EditorInChiefHomeController@sendManuscript')->name('manuscript.send');

   Route::get('/manuscript-under-review', 'EditorInChiefHomeController@getManuscriptUnderReview')->name('manuscript.underreview');

   Route::get('/reviewed-manuscript', 'EditorInChiefHomeController@reviewedManuscript')->name('manuscript.completed');

    Route::get('/file/{filename}', 'EditorInChiefHomeController@download')->name('manuscript.download');

//    Route::get('/manuscript/{id}/show', 'EditorInChiefHomeController@show')->name('manuscript.show');
//
    Route::post('/manuscript/destroy', 'EditorInChiefHomeController@destroy')->name('manuscript.destroy');

    Route::get('/notications/{id}', 'EditorInChiefHomeController@notifications')->name('manuscript.notication');

});

// Copy Editor
Route::prefix('aj-copyeditor')->group(function () {

   Route::get('/', 'Auth\CopyEditorLoginController@showLoginForm')->name('copyeditor.login');

   Route::post('/', 'Auth\CopyEditorLoginController@login')->name('copyeditor.login.submit');

    Route::get('/logout', 'Auth\CopyEditorLoginController@logout')->name('copyeditor.logout');

   Route::get('/dashboard', 'CopyEditorHomeController@index')->name('copyeditor.dashboard');

});

// Associate Editor
Route::prefix('aj-associateeditor')->group(function () {

   Route::get('/', 'Auth\AssociateEditorLoginController@showLoginForm')->name('associateeditor.login');

   Route::post('/', 'Auth\AssociateEditorLoginController@login')->name('associateeditor.login.submit');

    Route::get('/logout', 'Auth\AssociateEditorLoginController@logout')->name('associateeditor.logout');

   Route::get('/dashboard', 'AssociateEditorHomeController@index')->name('associateeditor.dashboard');

});

// Reviewer
Route::prefix('aj-reviewer')->group(function () {

   Route::get('/', 'Auth\ReviewerLoginController@showLoginForm')->name('reviewer.login');

   Route::post('/', 'Auth\ReviewerLoginController@login')->name('reviewer.login.submit');

    Route::get('/logout', 'Auth\ReviewerLoginController@logout')->name('reviewer.logout');

   Route::get('/dashboard', 'ReviewerHomeController@index')->name('reviewer.dashboard');

   Route::get('/manuscript', 'ReviewerHomeController@manuscript')->name('reviewer.manuscript');

    Route::get('/file/{id}/{filename}', 'ReviewerHomeController@download')->name('manuscript.getdownload');

    Route::get('/file/{filename}', 'ReviewerHomeController@downloadReviewedManuscript')->name('manuscript.downloadreviewed');

    Route::post('/manuscript', 'ReviewerHomeController@resendManuscript')->name('manuscript.resend');

    Route::get('/manuscript/reviewed', 'ReviewerHomeController@reviewedManuscript')->name('manuscript.reviewed');

    Route::get('/notications/{id}', 'ReviewerHomeController@notifications')->name('manuscript.notications');

});

