@extends('layouts.masterlayout')
@section('content')
<h2>This is About page</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
@verbatim
<div id="app">{{ message }}</div>
@endverbatim
@endsection

@section('pagetitle')
    About page
@endsection

@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>


<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello World!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush