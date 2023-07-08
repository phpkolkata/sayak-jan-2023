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

<div class="container border " style="height:680px">
    <div class="row">
        <div class="col" style="height: 100px">
        <h1>Welcome Admin</h1>
        </div>
    </div>
    <div class="row" style="height:500px">
        <div class="col-2 border">
            <ul style="font-size:20px;">
				<li><a href="/category/listing">Manage Category</a></li>
				<li><a href="product.php">Manage Product</a></li>
			</ul>
            @yield('nav')
        </div>
        <div class="col border">
            @yield('body')
        </div>
    </div>
    <div class="row">
        <div class="col" style="height:50px">footer</div>
    </div>
</div>


</body>
</html>
