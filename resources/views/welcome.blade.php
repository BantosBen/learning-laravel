@extends('app')

@section('content')
    @if (isset($people))
        <ol>
            @foreach ($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ol>
    @else
        <p>No People</p>
    @endif


    @if (count($posts))
        <table>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->publication_date }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
