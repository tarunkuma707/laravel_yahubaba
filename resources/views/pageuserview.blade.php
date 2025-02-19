@extends('layouts.masterlayout');
@section('content')
    <h1>Welcome to Page User Controller</h1>
    <h2> {{ $id }}</h2>
@endsection

@section('pagetitle')
Page Controller
@endsection

@section('sidebar')
@parent
This is Page User Controller Sidebar
@endsection