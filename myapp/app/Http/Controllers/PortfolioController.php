<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Jashzel Yap',

            'title' => 'Animator and a Programmer',

            'email' => 'jashzel@gmail.com',

            'phone' => '+639074562134',

            'location' => 'PH, Manila',

            'bio' => 'A cool guy that likes to play games and animate stuff and do vibe coding for fun.',

            'profile_image' => 'https://via.placeholder.com/300x300?text=Your+Photo',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data

            'experience' => [], // Experience data

            'education' => [], // Education data

            'social_links' => [] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}