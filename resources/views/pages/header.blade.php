<h1>Header Page</h1>
@foreach ($names as $kx=>$n)
    <p>{{ $kx }} - {{ $n }}</p>
@endforeach

@forelse ( $names as $kx=>$n )
<p>{{ $kx }} - {{ $n }}</p>
@empty
   <p>No Value Exists</p> 
@endforelse