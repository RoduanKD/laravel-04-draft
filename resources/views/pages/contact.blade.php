<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Please contact us </h1>
    <ul>
        @for ($i = 0; $i < 10; $i++)
            <li>this is number: {{ $i }}</li>
        @endfor
    </ul>
    <ul>
        @forelse ($foodItems as $item)
            <li>{{ $loop->iteration }} {{ $item }}</li>
        @empty
            no items
        @endforelse
    </ul>
    <form action="">
        <input type="text" placeholder="name">
        <hr>
    </form>
    <table><tr><td>test</td></tr></table>
</body>
</html>
