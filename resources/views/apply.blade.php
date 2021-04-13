@extends('layout')

@section('content')

{{-- @dd($apartment) --}}
    <section class="apply_container">




      <div class="card" style="width: 55rem;">
        <img class="apply_image" src="{{ ("/images/$apartment->image") }}" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">{{ $apartment->address }}</h2>
          <hr>
          <p class="card-text">{{ $apartment->description }}</p>
          <hr>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Hyra: {{ $apartment->rent }}kr</li>
          <li class="list-group-item">Rum: {{ $apartment->rooms}}</li>
          <li class="list-group-item">Stad: {{ $apartment->city }}</li>
          <li class="list-group-item">Hyrs ut av: {{ $apartment->user->name }}</li>
        </ul>
        <div class="card-body" id="card_body_button">
          <a class="apply_button" href="#" class="card-link">Skicka in intresseanmälan</a>
        </div>
      </div>
    </section>
@endsection
