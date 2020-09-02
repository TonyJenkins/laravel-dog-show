<?php

namespace App\Http\Controllers;

use App\Dog;

use Illuminate\Http\Request;

class DogController extends Controller  {

    const DOGS_ON_MAIN_PAGE = 9;

    public function index () {

        $dogs = Dog::query () -> orderByDesc ('score') -> paginate (self::DOGS_ON_MAIN_PAGE);

        return view ('dogs.index', ['dogs' => $dogs]);

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
    }

    public function show (Dog $dog) {

        return view ('dogs.show', compact ('dog'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function edit(Dog $dog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dog $dog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dog $dog)
    {
        //
    }
}
