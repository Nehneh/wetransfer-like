<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadControllerTim extends Controller
{
    //
    public function index()
    {
    	return view('upload.upload');
    }

     public function store(request $request)
    {
    	return $request->file('thefile')->store('thefile');




    		



    	if ($request->haseFile('thefile')) {
    		$request->file('thefile')->store('thefile');
    		// return $request->fichier->store('public');
    		return 'bien jouer ';

    		# code...
    	}
    	else
    	{
    		return "Un virus a été détecter ! Veuilliez appeler au numero surtaxe 08 87 87  78 77 . Ce numero sera surtaxer de 8$/minutes! 
    		Une attente de 1h20 est prévue goods by megaTim";
    	}

    	



    	





    // $path = $request->file('avatar')->store(
    // 'avatars/'.$request->user()->id, 's3'
    }

}
