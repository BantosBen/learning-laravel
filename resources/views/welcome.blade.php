@extends('app')

@section('content')
    @if (count($people) > 0)
        <ol>
            @foreach ($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ol>
    @else
        <p>No People</p>
    @endif
@endsection
