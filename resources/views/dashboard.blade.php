@extends('layout')

@section('content')

<p class="greeting">Välkommen till Lägenhetsportalen, {{ $user->name }}! </p>
<div class="container_cards">
    @foreach ($apartments as $apartment)
        <div class="col">
              <img class="image" src=" {{ ("images/$apartment->image") }}" alt="">

            <div class="box_text">
                <h3> {{ $apartment->address }}</h3>
                  <p>Läs mer om lägenheten här:</p>
                      <a href="/apply/{{ $apartment->id }}" class="btn btn-primary">Ansök</a>
            </div>
        </div>
            @endforeach
</div>
        @include('errors')
@endsection
