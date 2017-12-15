<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;





class FormController extends Controller
{


     
    public function index()
    {
        return view("forms.index");
    }


     public function store(request $request)
    {
// echo $request;

         $name_file_upload= $request->file('thefile');


        if ($request->hasFile('thefile')) 
        {
            $request->file('thefile')->move(public_path("/input"),$name_file_upload);
            // return $request->fichier->store('public');


                  // Il faut recupérer les données
        // apres les mettres dans un mail



        // apres les mettres dans une base de données

        $username = $request->input('username');
        $emailfrom = $request->input('emailfrom');
        $emailto = $request->input('emailto');
        $name_file_upload= $request->file('thefile');

        // echo $username; ca, ac marche

/*        $email = $req->input('email');
        $youremail = $req->input('youremail');*/

        $data = array(
            'username' =>$username,
            'emailfrom' =>$emailfrom,
            'emailto' =>$emailto,
            'nomfichier' =>$name_file_upload
        );

        DB::table('wetransfer')->insert($data);
        //echo "C'est réussi en tant que tel !";

        //Mail::to('gadri.ines@yahoo.fr')->send(new Contact($request->except('_token')));

        return view('forms.store'); 

           // return 'Le fichier a bien été envoyé ';
            # code...
        }
        else
        {
            return "Le fichier n'a pas été joint";
        }


    // $path = $request->file('avatar')->store(
    // 'avatars/'.$request->user()->id, 's3'
          Mail::send('mails.contact', 
            array(
                //blabla
            ),
            function($message) {
                    $message->from('expediteur@toto.com');

                    $message->to('gadri.ines@yahoo.fr', 'Utilisateur')->subject('Voici votre lien de partage de fichier');
                }
        );

    }


         
       


    




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
