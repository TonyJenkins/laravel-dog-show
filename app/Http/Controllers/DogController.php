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

    public function create () {

        return view ('dogs.create');

    }

    public function store (Request $request) {

        request () -> validate ([
            'name' => 'required|min:2|max:32',
            'breed' => 'required|min:4|max:32',
            'owner' => 'required|min:6|max:32',
        ]);

        $attributes = $request -> all (
            'name',
            'breed',
            'owner',
            'notes'
        );

        $attributes ['score'] = 0;

        $dog = Dog::create ($attributes);

        return redirect ($dog -> path);

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

    public function destroy (Dog $dog) {

        $dog -> delete ();

        return redirect () -> route ('index');

    }
}
