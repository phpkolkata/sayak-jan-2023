@extends('layout.master')

@section('body')
new body

<br>

<a href="{{ route('clist',33) }}">Click here</a>
<a href="{{ route('cadd') }}">Click here</a>
@endsection


@section('title')
Demo page
@endsection

@section('nav')
@parent

new listing

@endsection
