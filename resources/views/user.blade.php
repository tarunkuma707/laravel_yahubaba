@extends('layouts.masterlayout');
@section('content')
    <h1>User Detail</h1>
    <h3>Name:{{ $id['name'] }} | Phone:{{ $id['phone'] }} | City:{{ $id['City'] }} </h3>
@endsection

@section('pagetitle')
User Details
@endsection

@section('sidebar')
@parent
You have selected Test
@endsection