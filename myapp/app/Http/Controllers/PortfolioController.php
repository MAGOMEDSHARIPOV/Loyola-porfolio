<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Jesver Kim Loyola',

            'title' => 'Animator Coding',

            'email' => 'Jesverkiml@gmail.com',

            'phone' => '+639074562134',

            'location' => 'PH, Manila',

            'bio' => ' im simple guy play games and animate stuff and do vibe coding for fun and i willing to learn.',

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
