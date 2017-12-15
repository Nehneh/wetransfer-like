<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class uploadControllerTim extends Controller
{
    //
    public function index()
    {
        return view('form.index');
    }

     public function store(request $request)
    {
// echo $request;

         $name_file_upload= $request->file('thefile');


        if ($request->hasFile('thefile')) 
        {
            $request->file('thefile')->move(public_path("/uplaods"),$name_file_upload);
            // return $request->fichier->store('public');

            return 'Le fichier a bien été envoyer ';
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





class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("forms.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 

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




         
         Mail::send('mails.contact', 
            array(
                //blabla
            ),
            function($message) {
                    $message->from('expediteur@toto.com');

                    $message->to('gadri.ines@yahoo.fr', 'Utilisateur')->subject('Voici votre lien de partage de fichier');
                }
        );









        return view('forms.store'); 
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
