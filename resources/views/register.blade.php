<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<section class="register_form">
    <h2 class="register_title">Skapa ett konto här:</h2>
    <form method="POST" action="/register">
        @csrf
        <div class="container">
            <div class="col-md-6">
            <div id="logbox">
              <form id="signup" method="post" action="/signup">

                <input name="user[name]" type="text" placeholder="Namn" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>
                <input name="user[email]" type="email" placeholder="Email adress" class="input pass"/>
                <input name="user[password]" type="password" placeholder="Lösenord" required="required" class="input pass"/>
                <input name="user[password2]" type="password" placeholder="Upprepa lösenord" required="required" class="input pass"/>
                <input type="submit" value="Skapa konto!" class="inputButton"/>

              </form>
            </div>
           </div>

    </form>
</section>

</body>
</html>
