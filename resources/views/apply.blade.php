@extends('layout')

@section('content')


    <section class="apply_container">
      <div class="card" style="width: 55rem;">
        <img class="card-img-top" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">Polkagatan 14</h2>
          <p class="card-text">Fin lägenhet som är bra för alla!</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Hyra:</li>
          <li class="list-group-item">Rum:</li>
          <li class="list-group-item">Stad:</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Skicka in intresseanmälan</a>
          {{-- <a href="#" class="card-link">Another link</a> --}}
        </div>
      </div>
    </section>
@endsection
