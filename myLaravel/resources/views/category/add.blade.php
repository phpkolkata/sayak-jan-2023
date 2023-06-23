<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>

    <h1>Add Category</h1>

    <form action="add-cat" method="post">
        @csrf()
        Name:<input type="text" name="cname"><br>
        <button>Add</button>
    </form>
</body>
</html>
