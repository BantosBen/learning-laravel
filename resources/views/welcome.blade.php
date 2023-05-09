<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>
    <h1>Welcome to my website My name is {{ $name }}</h1>


    @if (count($people) > 0)
        <ol>
            @foreach ($people as $person)
                <li>{{ $person }}</li>
            @endforeach
            </ul>
        @else
            <p>No People</p>
    @endif
    </ol>
</body>

</html>
