@include('/header')

<body>
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
        <div class="col-md-4">
          <label for="inputState" class="form-label">Stadsdel</label>
          <select id="inputState" class="form-select">
            <option selected>Välj...</option>
            <option>Frölunda</option>
            <option>Angered</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Postkod</label>
          <input type="text" class="form-control" id="inputZip">
        </div>


        <div class="mb_3">
            <label for="formFile" class="form-label">Upload picture here:</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div>
            <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </div>
      </form>

    </section>
</div>

</body>
<script src="{{mix('js/app.js')}}"></script>
</html>
