
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Log In</title>
</head>

<style>

    body {
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: rgb(243, 192, 110);

    }
    .login_form {
     width: 50%;
    }
    .form-control {
        border: 1px solid black;
    }
    .btn-primary {
        color: black;
        background: white;
        border-color: black;

    }
    .error {
        margin: 2rem;
    }

    .login_text {
        margin: 2rem;
    }

    h1 {
        margin-bottom: 1rem;
    }
    .login_text {
    text-align: center;
    color: grey;
}

</style>
<body>
    <h1>Välkommen till Lägenhets Portalen!</h1>
    <p class="login_text">En hemsida för privat personer som är <br>intresserade av att hyra ut sin lägenhet<br> smidigt och enkelt!</p>
    <form class="login_form" action="/login" method="post" >
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address:</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input name="password" type="password" class="form-control" id="password">

        </div>
        <button type="submit" class="btn btn-primary">Logga In</button>
    </form>
    <div  class="form-text"><p class="login_text">Har du inget konto? Skapat ett <a href="/register">här!</a></p></div>
    <div class="error">
    @include('errors')
    </div>
</body>
<script src="{{mix('js/app.js')}}"></script>
</html>
