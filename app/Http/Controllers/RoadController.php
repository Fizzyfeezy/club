<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Road;

class RoadController extends Controller
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
        return view('club.road-safety.create');
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
        $roads = new Road;

        $roads->first_name = $request->input('first_name');
        $roads->middle_name = $request->input('middle_name');
        $roads->last_name = $request->input('last_name');
        $roads->email = $request->input('email');
        $roads->class_school = $request->input('class_school');
        $roads->phone_number = $request->input('phone_number');
        $roads->address = $request->input('address');
        $roads->birthday = $request->input('birthday');

        $roads->save();


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
