<?php

namespace App\Http\Controllers;

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
        $posts = collect([
            (object) [
                'title' => 'Post 1',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'thumbnail' => 'https://picsum.photos/200/300',
                'author' => 'John Doe',
                'date' => '2021-01-01',
            ],
            (object) [
                'title' => 'Post 2',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'thumbnail' => 'https://picsum.photos/200/301',
                'author' => 'John Doe',
                'date' => '2021-01-01',
            ],
            (object) [
                'title' => 'Post 3',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'thumbnail' => 'https://picsum.photos/200/302',
                'author' => 'John Doe',
                'date' => '2021-01-01',
            ],
            (object) [
                'title' => 'Post 4',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'thumbnail' => 'https://picsum.photos/200/303',
                'author' => 'John Doe',
                'date' => '2021-01-01',
            ],
            (object) [
                'title' => 'Post 5',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'thumbnail' => 'https://picsum.photos/200/304',
                'author' => 'John Doe',
                'date' => '2021-01-01',
            ],
            (object) [
                'title' => 'Post 6',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'thumbnail' => 'https://picsum.photos/200/305',
                'author' => 'John Doe',
                'date' => '2021-01-01',
            ],
        ]);

        return view('pages.post', compact('posts'));
    }
}
