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
// DB::listen(function($query){ var_dump($query->sql); });

Route::get('locale/{locale}', function ($locale) {

    Session::put('locale', $locale);

    return redirect()->back();

})->name('locale');

// Route::feeds();

Route::get('/testEmail', 'PagesControler@testEmail')
    ->name('site.testEmail');

Route::get('/feed', 'PagesControler@feedPosts')->name('feeds.posts');
Route::get('/', 'PagesControler@home')->name('home');
Route::get('/la-empresa', 'PagesControler@nosotros')->name('nosotros');
Route::get('/servicios/{servicio?}', 'PagesControler@servicios')->name('servicios');
Route::get('/contacto', 'PagesControler@contacto')->name('contacto');
Route::post('/enviarMensaje', 'PagesControler@enviarMensaje')->name('enviarMensaje');
Route::post('/registraNews', 'PagesControler@registrarNews')->name('contacto.registro');

// Route::get('/proyectos/{post?}', 'PagesControler@proyectos')->name('proyectos');
Route::get('/post/{post}', 'PagesControler@verPost')->name('verPost');
Route::get('/categoria/{category}', 'CategoriesController@show')->name('categoria');
Route::get('/tag/{tag}', 'TagsController@show')->name('tag');

Route::get('proyectos/filter', 'PagesControler@proyectos')->name('projects.index.filter');
Route::get('proyectos/{url}', 'PagesControler@verProyecto')->name('projects.show');
Route::get('proyectos', 'PagesControler@proyectos')->name('projects.index');
Route::get('proyectos/tipo/{project_type_id?}', 'PagesControler@proyectos')->name('projects.index.tipo');
Route::get('post', function () {
    return App\Post::all();
});

Route::get('/recetas', 'BlogController@index')->name('blog.index');
Route::get('/recetas/{post}', 'BlogController@show')->name('blog.show');
Route::get('/recetas/categoria/{category}', 'CategoriesController@show')->name('blog.category.show');
Route::get('/recetas/tags/{tag}', 'TagsController@show')->name('blog.tags.show');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('posts', 'PostsController@index')->name('admin.posts.index');
    Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
    Route::post('posts/store', 'PostsController@store')->name('admin.posts.store');
    Route::get('posts/{post}', 'PostsController@edit')->name('admin.posts.edit');
    Route::post('posts/update/{post}', 'PostsController@update')->name('admin.posts.update');
    Route::delete('posts/delete/{post}', 'PostsController@destroy')->name('admin.posts.destroy');

    // configuraciones
    Route::get('/configuraciones', 'ConfiguracionesController@index')->name('admin.configuraciones');
    Route::post('/configuraciones/notificaciones', 'ConfiguracionesController@updateNotifications')->name('admin.configuraciones.notificaciones');
    Route::post('/configuraciones/tag', 'ConfiguracionesController@updateTag')->name('admin.configuraciones.tag');
    Route::get('/configuraciones/logo', 'ConfiguracionesController@createLogos')->name('admin.configuraciones.logo');
    Route::post('/configuraciones/logo', 'ConfiguracionesController@subirLogo')->name('admin.configuraciones.logo');
    Route::post('/configuraciones/logo/espacio', 'ConfiguracionesController@cambioEspacio')->name('admin.configuraciones.logo.espacio');
    Route::delete('/configuraciones/logo/borrar/{id}', 'ConfiguracionesController@borrarLogo')->name('admin.configuraciones.logo.borrar');
    Route::post('/configuraciones/redes', 'ConfiguracionesController@updateRedes')->name('admin.configuraciones.redes');
    Route::post('/configuraciones/contacto', 'ConfiguracionesController@updateContacto')->name('admin.configuraciones.contacto');

    // usuario
    Route::get('users', 'UsersController@index')->name('admin.users.index');
    Route::get('users/create', 'UsersController@create')->name('admin.users.create');
    Route::post('users/store', 'UsersController@store')->name('admin.users.store');
    Route::get('users/{user}', 'UsersController@show')->name('admin.users.show');
    Route::get('users/editar/{user}', 'UsersController@edit')->name('admin.users.edit');
    Route::delete('users/{user}', 'UsersController@destroy')->name('admin.users.destroy');
    Route::put('users/{user}', 'UsersController@update')->name('admin.users.update');
    // roles y permisos
    Route::middleware('role:Admin')->put('users/roles/{user}', 'UsersRolesController@update')->name('admin.users.roles.update');
    Route::middleware('role:Admin')->put('users/permissions/{user}', 'UsersPermissionsController@update')->name('admin.users.permissions.update');
    Route::middleware('role:Admin')->get('roles/', 'RolesController@index')->name('admin.roles.index');
    Route::middleware('role:Admin')->get('roles/edit/{role}', 'RolesController@edit')->name('admin.roles.edit');
    Route::middleware('role:Admin')->get('roles/create', 'RolesController@create')->name('admin.roles.create');
    Route::middleware('role:Admin')->post('roles/store', 'RolesController@store')->name('admin.roles.store');
    Route::middleware('role:Admin')->put('roles/{role}', 'RolesController@update')->name('admin.roles.update');
    Route::middleware('role:Admin')->delete('roles/{role}', 'RolesController@destroy')->name('admin.roles.destroy');

    // Team
    Route::get('team/', 'TeamController@index')->name('team.index');
    Route::get('team/{id}/edit', 'TeamController@edit')->name('team.edit');
    Route::post('team/store', 'TeamController@store')->name('team.store');
    Route::put('team/{team}/update', 'TeamController@update')->name('team.update');
    Route::delete('team/destroy/{team}', 'TeamController@destroy')->name('team.destroy');

    // Partner
    Route::get('partner/', 'PartnerController@index')->name('partner.index');
    Route::get('partner/{id}/edit', 'PartnerController@edit')->name('partner.edit');
    Route::post('partner/store', 'PartnerController@store')->name('partner.store');
    Route::put('partner/{partner}/update', 'PartnerController@update')->name('partner.update');
    Route::delete('partner/destroy/{partner}', 'PartnerController@destroy')->name('partner.destroy');

    // Client
    Route::get('client/', 'ClientController@index')->name('client.index');
    Route::get('client/{id}/edit', 'ClientController@edit')->name('client.edit');
    Route::post('client/store', 'ClientController@store')->name('client.store');
    Route::put('client/{client}/update', 'ClientController@update')->name('client.update');
    Route::delete('client/destroy/{client}', 'ClientController@destroy')->name('client.destroy');

    // notificaciones
    Route::get('notificaciones', 'NotificacionesController@index')->name('notificaciones.index');
    Route::patch('notificaciones/{id}', 'NotificacionesController@leida')->name('notificaciones.leida');
    Route::delete('notificaciones/{id}', 'NotificacionesController@destroy')->name('notificaciones.destroy');

    Route::delete('foto/{foto}', 'FotosController@destroy')->name('admin.foto.destroy');

    Route::get('leads/index/{id?}', 'LeadsController@index')->name('admin.leads.index');

    Route::post('/posts/addFoto/{post}', 'PostsController@addFoto')->name('admin.posts.addFoto');
    Route::post('/projects/addFoto/{project}', 'ProjectsController@addFoto')->name('admin.projects.addFoto');
    Route::post('/fotos/store/{model_type}/{model_id}', 'FotosController@store')->name('admin.fotos.store');
    //projects
    Route::get('projects/create/{project_type}', 'ProjectsController@create')->name('admin.projects.create');
    Route::post('projects/store/{project_type}', 'ProjectsController@store')->name('admin.projects.store');
    // tags
    Route::resource('tags', 'TagsController', ['as' => 'admin']);

    // categories
    Route::resource('categories', 'CategoriesController', ['as' => 'admin']);
    Route::resource('projects', 'ProjectsController', ['as' => 'admin', 'except' => ['create', 'store', 'show']]);
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
