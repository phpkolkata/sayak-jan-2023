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
        Name:<input type="text" name="name"><br>
        isActive:
        <select name="is_active">
            <option value="y">Yes</option>
            <option value="n">No</option>
        </select>
        <br>
        <button>Add</button>
    </form>
@endsection
