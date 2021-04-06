<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
        {{-- <link rel="stylesheet" href="{{mix('css/app.css')}}"> --}}
        <title>Lägenhets Portalen</title>
    </head>

    <header>
        <div class="nav-bar">
            <ul class="nav justify-content-end">
                {{-- <div class="greeting">
                    <p>Hej, {{ $user->name }}!</p>
                    @include('errors')
                </div> --}}

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/dashboard">Lägenheter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/publish">Annonsera</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profile">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout">Logga ut</a>
            </li>
          </ul>
        </div>
    </header>
