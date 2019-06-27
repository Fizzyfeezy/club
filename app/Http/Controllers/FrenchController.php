<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\French;

class FrenchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('club.french.create');
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
        $frenches = new French;

        $frenches->first_name = $request->input('first_name');
        $frenches->middle_name = $request->input('middle_name');
        $frenches->last_name = $request->input('last_name');
        $frenches->email = $request->input('email');
        $frenches->class_school = $request->input('class_school');
        $frenches->phone_number = $request->input('phone_number');
        $frenches->address = $request->input('address');
        $frenches->birthday = $request->input('birthday');

        $frenches->save();


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
