@extends ('layouts.app')

@section ('header')

    <div class="text-4xl mb-8">
        <h1>Poppleton Dog Show: Edit Details for {{ $dog -> name }}</h1>
    </div>

@endsection

@section ('content')

    <form method="post" action="{{ $dog -> path }}">

        @method ('PATCH')

        @csrf

        <div class="flex flex-wrap">
            <div class="w-1/2">
                <label class="block" for="name">
                    Dog's Name
                </label>

                <input class="block w-2/5 @error ('name') border border-red-500 @enderror"
                       type="text" name="name" data-lpignore="true"
                       autocomplete="off" value="{{ $dog -> name }}" />

                @error ('name')
                    <div class="alert-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="w-1/2">
                <label class="block" for="owner">
                    Current Score
                </label>
                <input class="block w-1/5 @error ('score') border border-red-500 @enderror"
                       type="text" name="score" data-lpignore="true"
                       autocomplete="off" value="{{ $dog -> score }}" />

                @error ('score')
                <div class="alert-message">
                    {{ $message }}
                </div>
                @enderror

            </div>

        </div>

        <div class="flex flex-wrap">
            <div class="w-1/2">
                <label class="block" for="breed">Breed</label>
                <input class="block w-4/5 @error ('breed') border border-red-500 @enderror"
                       type="text" name="breed" data-lpignore="true"
                       autocomplete="off" value="{{ $dog -> breed }}" />

                @error ('breed')
                   <div class="alert-message">
                       {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="w-1/2">
                <label class="block" for="owner">
                    Owner
                </label>
                <input class="block w-4/5  @error ('owner') border border-red-500 @enderror"
                       type="text" name="owner" data-lpignore="true"
                       autocomplete="off" value="{{ $dog -> owner }}" />

                @error ('owner')
                    <div class="alert-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full">
                <label class="block" for="description">Details</label>
                <textarea class="block w-8/12" rows="8"
                          name="notes">{{ $dog -> notes }}</textarea>
            </div>
        </div>

        <div class="flex flex-wrap mt-8">
            <div class="w-full">
                <button class="nav-button" type="submit"><i class="fas fa-paw mr-2"></i>Update Dog</button>
                <a href="/">
                    <button class="nav-button" type="button"><i class="fas fa-paw mr-2"></i>Cancel</button>
                </a>
            </div>
        </div>

    </form>

@endsection
