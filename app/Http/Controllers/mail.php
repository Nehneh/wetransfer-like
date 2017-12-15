<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mail extends Controller
{
    //

       public function index()
    {
    	return view('mails.contact');
    }





$post=App\Post::find(1);
echo url ("/post/{$post->id}");








}
