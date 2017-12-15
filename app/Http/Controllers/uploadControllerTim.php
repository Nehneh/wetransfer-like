<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class uploadControllerTim extends Controller
{
    //
    public function index()
    {
    	return view('upload.upload');
    }

     public function store(request $request)
    {
// echo $request;

    	 $name_file_upload= $request->file('thefile');


    	if ($request->hasFile('thefile')) 
    	{
    		$request->file('thefile')->move(public_path("/uplaods"),$name_file_upload);
    		// return $request->fichier->store('public');

    		return 'Le fichier a bien été envoyé ';
			# code...
    	}
    	else
    	{
    		return "Error";
    	}

    // $path = $request->file('avatar')->store(
    // 'avatars/'.$request->user()->id, 's3'
    }

}


