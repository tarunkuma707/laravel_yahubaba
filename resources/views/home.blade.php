@extends('layouts.masterlayout')
@section('content')
<h2>This is home page</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

@endsection

@section('pagetitle')
home page
@endsection

@push('scripts')
    <script src='{{ asset('example.js') }}'></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
@endpush

@prepend('styles')
    <style>
        #wrapper{
            background: tan;
        }
    </style>
    
@endprepend