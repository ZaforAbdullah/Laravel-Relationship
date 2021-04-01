<?php

use App\User;
use App\Phone;
use App\Post;
use App\Comment;

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

Route::get('/hasOne', function () {
    $phone = User::find(1)->phone;
    echo($phone);
});


Route::get('/belongsTo', function () {
    $user = Phone::find(1)->user;
    echo($user);
});

Route::get('/hasMany', function () {
    $comments = Post::find(1)->comments;

    foreach ($comments as $comment) {
        echo($comment);
    }
});

Route::get('/hasOne_1', function () {
    //One To Many (Inverse) Relationship
    $comment = Comment::find(1);

    echo($comment);

});