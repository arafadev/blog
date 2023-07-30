<?php

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

    // $post_title = 'Laudantium';
    // $post_content = 'rum err';
    // return Post::where(function ($query) use ($post_title, $post_content) {
    //     $query->where('title', 'LIKE', "%$post_title%")
    //         ->where('content', 'LIKE', "%$post_content%");
    // })->get();
});
