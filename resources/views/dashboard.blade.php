@extends('layout')

@section('content')

<p class="greeting">Välkommen till Lägenhets Portalen, {{ $user->name }}! </p>

<div id="app" class="container_cards">
    @foreach ($apartments as $apartment)
        <div class="col">
              <img class="image" src=" {{ ("images/$apartment->image") }}" alt="">

            <div class="box_text">
                <h3> {{ $apartment->address }}</h3>
                  <p>Läs mer om lägenheten här:</p>
                  <form action="/apply" method="POST">
                    @csrf
                    <label for="apartment_id"></label>
                      <button name="apartment_id" id="apartment_id" value="{{ $apartment->id }}" type="submit" class="btn btn-primary">Ansök</button>
                 </form>
            </div>
        </div>
            @endforeach
</div>
        @include('errors')
@endsection
