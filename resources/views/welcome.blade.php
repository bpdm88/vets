@extends("app")

@section("title")
  <div class="container">
    <h1 class="display-4">Welcome to the vets!</h1>
    <p class="lead">Where all of your vet needs for any of your pets are taken care of.</p>
@endsection

@section("content")
  <div class="list-group">
    <h1>{{ $greeting }}</h1>
  </div>
@endsection