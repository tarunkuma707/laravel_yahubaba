@extends('layouts.masterlayout');
@section('content')
    <h1>Welcome to Page Controller</h1>
    <a href="{{ route('blog') }}">Blog</a>
@endsection

@section('pagetitle')
Page Controller
@endsection

@section('sidebar')
@parent
This is Page Controller Sidebar
@endsection