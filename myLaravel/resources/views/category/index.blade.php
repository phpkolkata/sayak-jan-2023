@extends('layout.master')
@section('title') Category @endsection

@section('body')

@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif

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
        <td><a href='{{ route('del.cat', $row->id) }}'>del</a></td>
    </tr>
    @endforeach


</table>

{{ $db->links() }}
@endsection
