@extends('layout.master')

@section('title') EDIT Category @endsection

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


    <h1>EDIT Category</h1>

    <form action="{{ route('update.cat') }}" method="post">
        @csrf()
        <input type="hidden" name="cid" value="{{ $data[0]->id }}">
        Name:<input type="text" name="name" value="{{ $data[0]->name }}"><br>
        isActive:
        <select name="is_active">
            <option value="y">Yes</option>
            <option value="n">No</option>
        </select>
        <br>
        <button>Update</button>
    </form>
@endsection
