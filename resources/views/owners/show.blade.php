@extends("app")

@section("content")
<h2>{{ $owner->fullAddress() }}</h2>
@endsection