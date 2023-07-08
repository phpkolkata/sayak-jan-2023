@extends('layout.master')
@section('title') Category @endsection

@section('body')

@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif


<div> <a href="/category/add">Add...</a></div>

<table class="table table-strip">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>isActive</th>
        <th>Options</th>
    </tr>

    @foreach($db as $row)
    <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->is_active }}</td>
        <td><a href='{{ route('del.cat', $row->id) }}'>del</a> / <a href='{{ route('edit.cat', $row->id) }}'>edit</a></td>
    </tr>
    @endforeach


</table>

{{ $db->links() }}
@endsection
