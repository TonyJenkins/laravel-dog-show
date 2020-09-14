@extends ('layouts.email')

@section ('header')

    <h1>Poppleton Dog Show</h1>

@endsection

@section ('content')

    <p>
        Dear {{ current_user () -> name }}
    </p>

    <p>
        Thank you for request details of your favourite dog at this year's show.
    </p>

    <img src="{{ $dog -> image_url (200) }}" />


    <p>
        <b>Name: </b> {{ $dog -> name }} <br />
        <b>Breed: </b> {{ $dog -> breed }} <br />
        <b>Owner: </b> {{ $dog -> owner }} <br />
    </p>

    <h2>
        Notes
    </h2>

    <p>
        {!! $dog -> formatted_notes () !!}
    </p>

@endsection
