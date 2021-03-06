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

// Route::get('/', function () {
//     return ['foo' => 'bar'];
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/', function() {
//     return view('test', [
//         'name' => request('name')
//     ]);
// });

// Route Wildcards.
// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'This is first post.',
//         'my-second-post' => 'This is second post.'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found.');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });

// Routing to Controller.
Route::get('/posts/{post}', 'PostsController@view');