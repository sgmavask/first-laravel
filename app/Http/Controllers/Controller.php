<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
    return view('home.welcome');
    
    }

    public function blog()
    {
        return view('blog.blog-home');
    }


    public function blog_single()
    {
        return view('blog.blog-single');
    }


    public function about()
    {
        return view('about.about');
    }


    public function contact()
    {
        return view('contact.contact');
    }

    public function element()
    {
        return view('element.element');
    }

    public function portfolio()
    {
        return view('portfolio.portfolio');
    }

    public function price()
    {
        return view('price.price');
    }

    public function services()
    {
        return view('services.services');
    }



























}



