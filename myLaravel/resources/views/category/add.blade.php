@extends('layout.master')

@section('title') Add Category @endsection

@section('body')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <h1>Add Category</h1>

    <form action="add-cat" method="post">
        @csrf()
        Name:<input type="text" name="cname"><br>
        Price:<input type="text" name="price"><br>
        <button>Add</button>
    </form>
@endsection
