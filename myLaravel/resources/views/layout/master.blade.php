<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @yield('css')
    @yield('js')

</head>
<body>
<h1>Master Page</h1>
    <div>Header</div>
    <div>navigation

        @section('nav')
        <ul>
            <li>listing 1</li>
            <li>listing 2</li>
        </ul>
        @show

    </div>
    <div>
        @yield('body')
    </div>
    <div>footer</div>


</body>
</html>
