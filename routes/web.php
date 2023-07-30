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

    // create posts
    $user_id = 1;
    $category_id = 3;

    $post = new Post();

    $post->title = 'post title';
    $post->content = 'post content';
    $post->category()->associate($category_id);
    $result = User::find($user_id)->posts()->save($post);

    return $result;
});
