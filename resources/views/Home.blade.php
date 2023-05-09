<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body class="antialiased">
        {{$saluto}}
        <h1>I Dialetti</h1>
        <ul>
            @foreach ($regioni as $dialetto)
              <li>{{$dialetto}}</li>  
            @endforeach
        </ul>
    </body>
</html>
