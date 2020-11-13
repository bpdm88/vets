@extends("app")

@section("title")
  <div class="container">
    <h1 class="display-4">Welcome to the vets!</h1>
    <p class="lead">Where all of your vet needs for any of your pets are taken care of.</p>
@endsection

@section("content")
  <div class="list-group">

    @if (count($owners) === 1)
         I have one record!
    @elseif (count($owners) > 1)
        I have multiple records!
    @else
        I don't have any records!
    @endif

    @foreach ($owners as $owner)
      <a href="/owners/{{ $owner->id }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">

          <h5 class="mb-1">{{ $owner->fullName() }}</h5>

        </div>
      </a>
    @endforeach
  </div>
@endsection