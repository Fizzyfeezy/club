<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chess;

class ChessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('club.chess.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                 //validate the data
        $this->validate($request, [
                'first_name' => 'required|max:25',
                'middle_name' => 'required|max:25',
                'last_name' => 'required|max:25',
                'email' => 'required',
                'class_school' => 'required',
                'phone_number' => 'required|max:11',
                'address' => 'required',
                'birthday' => 'required',
        ]);

        //store in database
        $chesses = new Chess;

        $chesses->first_name = $request->input('first_name');
        $chesses->middle_name = $request->input('middle_name');
        $chesses->last_name = $request->input('last_name');
        $chesses->email = $request->input('email');
        $chesses->class_school = $request->input('class_school');
        $chesses->phone_number = $request->input('phone_number');
        $chesses->address = $request->input('address');
        $chesses->birthday = $request->input('birthday');

        $chesses->save();


        //redirect to another page

        return redirect('/');
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
