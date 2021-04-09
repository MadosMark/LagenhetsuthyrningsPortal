@extends('layout')

@section('content')
    <div class="publish_body">
    <section class="publish_container">
    <h1 class="publish_title">Fyll i nedan för annonsering:</h1>
    <form class="row g-3">

        <div class="col-12">
          <label for="inputAddress" class="form-label">Adress</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Stad</label>
          <input type="text" class="form-control" id="inputCity">
        </div>

        <div class="col-md-2">
          <label for="inputZip" class="form-label">Postkod</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Hyra</label>
            <input type="text" class="form-control" id="inputZip">
          </div>


        <div class="mb_3">
            <label for="formFile" class="form-label">Ladda upp bild här:</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div>
            <select class="form-select" aria-label="Default select example">
            <option selected>Antal rum</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            </select>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Text</label>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Ladda upp</button>
            </div>
        </div>
      </form>



    </section>
</div>

@endsection
