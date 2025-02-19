@extends('layouts.masterlayout');
@section('content')
@foreach ($user as $id=>$u)
<h3>{{ $u['name'] }} | {{ $u['City'] }} | {{ $u['phone'] }}
    | <a href="{{ route('view.user',$id) }}">Show</a>
</h3>
    
@endforeach
@endsection

@section('pagetitle')
Users
@endsection

