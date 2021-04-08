@extends('layout')

@section('content')
<section class="register_form">
    <h2 class="register_title">Skapa ett konto här:</h2>
    <form method="post" action="register">
        @csrf
        <div class="container">
            <div class="col-md-6">
            <div id="logbox">
              <form id="signup" method="POST" action="/register">
                <input name="name" type="name" placeholder="Namn" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>
                <input name="email" type="email" placeholder="Email adress" class="input pass"/>
                <input name="password" type="password" placeholder="Lösenord" required="required" class="input pass"/>
                {{-- <input name="user[password2]" type="password" placeholder="Upprepa lösenord" required="required" class="input pass"/> --}}
                <input type="submit" value="Skapa konto!" class="inputButton"/>

              </form>
            </div>
           </div>

    </form>
</section>

@endsection
