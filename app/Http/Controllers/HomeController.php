<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = Post::published()
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.home', [
            'latestPosts' => $latestPosts,
        ]);
    }
}
