@extends('layout')

@section('content')


<p class="greeting">Välkommen till Lägenhets Portalen, {{ $user->name }}! </p>
@include('errors')
<div class="container_cards">
        <div class="col">
              <img class="image" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
            <div class="box_text">
                <h3> Polkagatan 14D</h3>
                  <p>Läs mer om lägenheten här:</p>
                  <button onclick="window.location='{{ url('apply') }}'" type="button" class="btn btn-primary">Ansök</button>
            </div>
        </div>

@endsection
