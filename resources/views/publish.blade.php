@extends('layout')

@section('content')
    <div class="publish_body">
    <section class="publish_container">
    <h1 class="publish_title">Fyll i nedan för annonsering:</h1>

    <form method="POST" action="/publish" enctype="multipart/form-data">
        @csrf
          <label for="address" class="form-label">Adress</label>
          <input name="address" type="address" class="form-control" id="inputAddress" placeholder="">
          <label for="city" class="form-label">Stad</label>
          <input name="city" type="city" class="form-control" id="inputCity">
          <label for="rent" class="form-label">Hyra</label>
          <input name="rent" type="rent" class="form-control" id="inputAddress" placeholder="">
          <label for="rooms" class="form-label">Rum</label>
          <select name="rooms" id="rooms" class="form-select" aria-label="Default select example">
          <option selected>Antal rum</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          </select>
          <label for="image" class="form-label">Ladda upp bild här:</label>
            <input class="form-control" type="file" id="image" name="image">
          <label for="description">Beskrivning</label>
          <textarea name="description" class="form-control" placeholder="Beskrivning" id="description" style="height: 100px"></textarea>

          <button type="submit" class="btn btn-primary">Ladda upp</button>
        </form>

        <div class="error">
            @include('errors')
            </div>



    </section>
</div>

@endsection
