<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    Post::query()->create(['title' => 'İlk Post', 'content' => 'Merhaba Dünya']);
    $post = Post::query()->find(1);
    $post->update(['title' => 'Güncellenmiş Post']);
    $post->delete();

    return view('welcome');
});
