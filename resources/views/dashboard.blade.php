@extends('layout')

@section('content')

<p class="greeting">Välkommen till Lägenhets Portalen, {{ $user->name }}! </p>
<div class="container_cards">
    @foreach ($apartments as $apartment)
        <div class="col">
              <img class="image" src=" {{ ("images/$apartment->image") }}" alt="">

            <div class="box_text">
                <h3> {{ $apartment->address }}</h3>
                  <p>Läs mer om lägenheten här:</p>
                      <button onclick="window.location.href='/apply/{{ $apartment->id }}'" class="btn btn-primary">Ansök</button>
            </div>
        </div>
            @endforeach
</div>
        @include('errors')
@endsection
