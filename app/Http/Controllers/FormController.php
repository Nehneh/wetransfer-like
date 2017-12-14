<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

        $username = $req->input('username');

        echo $username;
/*        $email = $req->input('email');
        $youremail = $req->input('youremail');*/

  /*      $data = array('username' =>$username ,'email' =>$email,'youremail' =>$youremail );
        DB::table('laraa')->insert($data);
        echo "C'est réussi en tant que tel !";*/

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
