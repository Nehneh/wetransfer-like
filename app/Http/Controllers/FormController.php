<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

        // echo $username; ca, ac marche

/*        $email = $req->input('email');
        $youremail = $req->input('youremail');*/

        $data = array(
            'username' =>$username,
            'emailfrom' =>$emailfrom,
            'emailto' =>$emailto
        );
        DB::table('wetransfer')->insert($data);
        //echo "C'est réussi en tant que tel !";

        //Mail::to('gadri.ines@yahoo.fr')->send(new Contact($request->except('_token')));














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
