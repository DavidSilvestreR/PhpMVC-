<?php


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ageda</title>
  </head>
  <body class="login-index">
    <section class="form-container container center">
      <h1>Bienvenido</h1>
      <div class="row col m6 offset-m3 green accent-2">
        <form action="Index/login/1234" method="POST" name="Session" class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input id="email" name="mail" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" name="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
                <input id="email" type="submit" class="btn">
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>


  </body>
</html>
