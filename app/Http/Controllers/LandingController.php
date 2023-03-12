<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        $techStack = ['PHP', 'Laravel', 'MySQL', 'JavaScript', 'React', 'NodeJS', 'ExpressJS', 'TailwindCSS', 'Bootstrap'];

        return view('pages.about', compact('techStack'));
    }

    public function post(): View
    {
        $posts = Post::with('category')->get();

        return view('pages.post', compact('posts'));
    }
}
