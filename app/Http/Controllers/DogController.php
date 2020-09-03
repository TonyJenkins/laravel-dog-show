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

    public function edit (Dog $dog) {

        return view ('dogs.edit', compact ('dog'));

    }

    public function update (Request $request, Dog $dog) {

        $attributes = request () -> validate ([
            'name' => 'required|min:2|max:32',
            'breed' => 'required|min:4|max:32',
            'owner' => 'required|min:6|max:32',
            'score' => 'numeric|min:0|max:10',
        ]);

        $dog -> update ($attributes);

        return redirect () -> route ('index');

    }

    public function destroy (Dog $dog) {

        $dog -> delete ();

        return redirect () -> route ('index');

    }
}
