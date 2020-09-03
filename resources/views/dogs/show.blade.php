@extends ('layouts.app')

@section ('header')

    <div class="flex justify-between">
        <div class="text-4xl mb-8">
            <h1>Poppleton Dog Show: {{ $dog -> name }}</h1>
        </div>
        <div>
            <x-home-button />
        </div>
    </div>

@endsection

@section ('content')

    <div class="flex">
        <div class="w-1/2">
            <img src="{{ $dog -> image_url (500) }}" />
        </div>
        <div class="w-1/2 text-xl bg-blue-100 px-4 py-4 border rounded border-gray-500">
            <h2 class="font-bold mb-4">
                Dog Details
            </h2>
            <p class="mb-2">
                Breed: {{ $dog -> breed }}
            </p>
            <p class="mb-4">
                Owner: {{ $dog -> owner }}
            </p>
            <h2 class="font-bold mb-4">
                Dog Notes
            </h2>
            <p>
                {{ $dog -> notes }}
            </p>
        </div>
    </div>

@endsection
