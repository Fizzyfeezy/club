<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;

class BasketController extends Controller
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
        return view('club.basketball.create');
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
        $baskets = new Basket;

        $baskets->first_name = $request->input('first_name');
        $baskets->middle_name = $request->input('middle_name');
        $baskets->last_name = $request->input('last_name');
        $baskets->email = $request->input('email');
        $baskets->class_school = $request->input('class_school');
        $baskets->phone_number = $request->input('phone_number');
        $baskets->address = $request->input('address');
        $baskets->birthday = $request->input('birthday');

        $baskets->save();


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
