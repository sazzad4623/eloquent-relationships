<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Mechanic;
use App\Models\Car;
use App\Models\Owner;


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

Route::get('/', function () {
    $phone = User::find(1);
    $phone = User::find(1)->phone;
    // return $phone;

    $user = Phone::find(2);
    $user = Phone::find(2)->user;
    // return $user;

    $users = User::all();
    // return $users;


    //One to many

    // $comments = Post::find(1);
    // $comments = Post::find(1)->comments;
    // return $comments;

    // $post = Comment::find(2);
    // $post = Comment::find(5)->post;
    // return $post;

    // $posts = Post::all();
    // return $posts;

    $posts = Post::with('comments')->get();
    // return $posts;

    //Many to many

    $posts = Post::with('categories')->get();
    // return $posts;

    // comment-out

    // return view('welcome', compact('posts'));

    // $comments = Comment::all();

    // return view('welcome', compact('comments'));


    //Has One Through

    // $mechanics = Mechanic::all();
    // return $mechanics;

    $mechanics = Mechanic::with('carOwner')->get();
    // return $mechanics;

    return view('welcome', compact('mechanics'));
});
