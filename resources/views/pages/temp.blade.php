@extends('layouts.masterlayout')
@section('content')
<h1>This is Temp</h1>
@php
    $fruits =   ["Apple","Banana","Grapes"];
@endphp
<script>
    //var data = @json($fruits);
    var data    =   {{ Js::from($fruits) }};
    console.log(data);
    data.forEach(function(entry){
        console.log(entry);
    });
</script>
@endsection

@section('pagetitle')
    Temprory
@endsection