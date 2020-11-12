@extends("app")

@section("title")
    <h1 class="display-4">Welcome to the Vets!</h1>
    <p>Where all your vet practice needs can be met</p>
@endsection

@section("content")
  <div class="list-group">

    @foreach (App\Models\Owner::all() as $owner)
      <a href="/owners/{{ $owner->id }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">

          <h5 class="mb-1">{{ $owner->fullName() }}</h5>

          @include("_partials/address")

          <h5 class="mb-1">{{ $owner->email }}</h5>

          <h5 class="mb-1">{{ $owner->telephone }}</h5>

        </div>
      </a>
    @endforeach
  </div>
@endsection