<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;





class FormController extends Controller
{


     
    public function index()
    {
        return view("forms.index");
    }


     public function store(request $request)
    {
// echo $request;

         // $name_file_upload= $request->file('thefile');
         $name_file_upload= $request->file('thefile')->getClientOriginalName();


        if ($request->hasFile('thefile')) 
        {
            $request->file('thefile')->move(public_path("/uploads"),$name_file_upload);
            // return $request->fichier->store('public');





            //Cookie namefichier 
            setcookie('name',$name_file_upload,(time()+ 3600));


                  // Il faut recupérer les données
        // apres les mettres dans un mail



        // apres les mettres dans une base de données

        $username = $request->input('username');
        $emailfrom = $request->input('emailfrom');
        $emailto = $request->input('emailto');
        // $name_file_upload= $request->file('thefile');

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

//email


        // $mail =$request->input('mail');
        // $destinataire =$request->input('destinataire');
        // $name_file=$$name_file_upload;

            Mail::send('mails.contact', 
            $data,
            function($message) use ($data)
                {
                    $message->from($data['emailto']);

                    $message->to($data['emailfrom'],'Utilisateur')->subject('Voici votre lien de partage de fichier');
                }
        );

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

