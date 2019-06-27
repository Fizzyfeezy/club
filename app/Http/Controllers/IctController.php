<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ict;

class IctController extends Controller
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
        return view('club.ict.create');
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
        $icts = new Ict;

        $icts->first_name = $request->input('first_name');
        $icts->middle_name = $request->input('middle_name');
        $icts->last_name = $request->input('last_name');
        $icts->email = $request->input('email');
        $icts->class_school = $request->input('class_school');
        $icts->phone_number = $request->input('phone_number');
        $icts->address = $request->input('address');
        $icts->birthday = $request->input('birthday');

        $icts->save();


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
