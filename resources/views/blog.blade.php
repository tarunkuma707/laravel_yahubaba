@extends('layouts.masterlayout');
@section('content')
<h1>Blogs</h1>
<a href="{{ route('pagehome') }}">Page Home</a>
@endsection

@section('pagetitle')
Blogs
@endsection

@section('sidebar')
This is before Blade
@parent
@endsection