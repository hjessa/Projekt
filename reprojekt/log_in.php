<?php

    session_start();

    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: witamy.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello world!</title>
    <!-- add styles -->
    <link rel="stylesheet" href="./style/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- add javascripts -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <link rel="" href="/css/master.css">
  </head>
  <body>
    <header class="main-header shadow p-3 row justify-content-md-center">
      <div class="title col-6">
        <img src="./img/logo.png" class="logo mx-auto" alt="logo">
        <div class="description d-none d-md-block"> Nauka języka angielskiego dla IT </div>
      </div>
    </header>

    <div class="container">
      <div class="content row justify-content-md-center">
        <form class="col col-lg-6" id="register" action="zaloguj.php" method="post">
          <fieldset style="margin-bottom: 15%;">
            <legend><h3> Logowanie do <span style="font-weight: bold; display: block;">Hello World!</span></h3></legend>
          </fieldset>
          <div class="form-group" style="margin-bottom: 5%;">
            <input required type="email" class="form-control" name="email" id="email" placeholder="E-mail" autofocus>
          </div>
          <div class="form-group" style="margin-bottom: 5%;">
            <input required type="password" class="form-control" name="pass" id="pass" placeholder="Wprowadź hasło">
          </div>

          <input type="Submit" class="btn btn-success" style="margin-bottom: 5%;" name="submit" value="Zaloguj się">
          <?php
              if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
          ?>
          <fieldset>
            <a href="index.php"> Powrót do strony głównej</a><br><br>
            <a href="#"> Zapomniałeś hasła?</a>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- add javascript -->
    <script type="text/javascript" src="./js/index.js"></script>
  </body>
</html>
