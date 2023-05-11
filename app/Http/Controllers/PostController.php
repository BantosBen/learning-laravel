<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //


    public function createPost()
    {
        $posts = [
            [
                'title' => 'Lorem Ipsum',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget sapien vitae felis faucibus auctor non vel sapien. Proin sit amet nulla eu lorem tincidunt finibus ac nec leo. Nullam mattis euismod ante ac dictum. Aliquam et pulvinar libero.',
                'author_id' => 1,
                'publication_date' => '2022-01-01',
                'category' => 'Technology',
                'views' => 10
            ],
            [
                'title' => 'Dolor Sit Amet',
                'content' => 'Dolor sit amet, consectetur adipiscing elit. Nulla eget sapien vitae felis faucibus auctor non vel sapien. Proin sit amet nulla eu lorem tincidunt finibus ac nec leo. Nullam mattis euismod ante ac dictum. Aliquam et pulvinar libero.',
                'author_id' => 2,
                'publication_date' => '2022-01-02',
                'category' => 'Sports',
                'views' => 15
            ],
            [
                'title' => 'Vestibulum Faucibus',
                'content' => 'Vestibulum faucibus euismod risus sit amet eleifend. Nulla eget sapien vitae felis faucibus auctor non vel sapien. Proin sit amet nulla eu lorem tincidunt finibus ac nec leo. Nullam mattis euismod ante ac dictum. Aliquam et pulvinar libero.',
                'author_id' => 3,
                'publication_date' => '2022-01-03',
                'category' => 'Politics',
                'views' => 20
            ],
            [
                'title' => 'Pulvinar Libero',
                'content' => 'Pulvinar libero, consectetur adipiscing elit. Nulla eget sapien vitae felis faucibus auctor non vel sapien. Proin sit amet nulla eu lorem tincidunt finibus ac nec leo. Nullam mattis euismod ante ac dictum. Aliquam et pulvinar libero.',
                'author_id' => 4,
                'publication_date' => '2022-01-04',
                'category' => 'Entertainment',
                'views' => 25
            ],
            [
                'title' => 'Dictum Ac',
                'content' => 'Dictum ac, consectetur adipiscing elit. Nulla eget sapien vitae felis faucibus auctor non vel sapien. Proin sit amet nulla eu lorem tincidunt finibus ac nec leo. Nullam mattis euismod ante ac dictum. Aliquam et pulvinar libero.',
                'author_id' => 5,
                'publication_date' => '2022-01-05',
                'category' => 'Travel',
                'views' => 30
            ]
        ];

        for ($i = 0; $i < 5; $i++) {
            Post::create($posts[$i]);
        }
    }

    public function viewPosts()
    {
        $posts = Post::all();

        return view('welcome', [
            'posts' => $posts,
            'name' => 'View Posts'
        ]);
    }
}