@extends('layouts.app')

@section ('content')

    <div class="container mx-auto">
        <div class="text-4xl mb-8">
            <h1>Poppleton Dog Show: Leaderboard</h1>
        </div>

        <div class="w-1/3">

            @foreach ($dogs as $dog)

                @include ('_dog')

            @endforeach

            {{ $dogs -> links () }}

        </div>

    </div>

@endsection
