<?php
session_start();
if(isset($_POST['email']))
{
    $wszystko_ok = true;

    $email = $_POST['email'];
    $haslo1 = $_POST['pass'];
    $haslo2 = $_POST['pass_repeat'];


    //sprawadz EMAIL, spejclany filtr maili
  $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
  if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
    {
  $wszystko_ok = false;
  $_SESSION['e_email'] = "Podaj poprawny adres email";
    }

  //sprawdz poprawnosc hasla
  if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
        {
            $wszystko_ok=false;
            $_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
        }

  if($haslo1!=$haslo2)
  {
    $wszystko_ok=false;
    $_SESSION['e_haslo']="podane hasła nie są identyczne";
  }


  $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

  require_once "connect.php";

  mysqli_report(MYSQLI_REPORT_STRICT);

  try
  {
      $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
      if ($polaczenie->connect_errno!=0)
      {
        throw new Exception(mysqli_connect_error());
      }
      else {
        //do ogarnięcia
        $rezultat = $polaczenie->query("SELECT ID FROM uzytkownicy WHERE Email='$email'");
        if(!$rezultat) throw new Exception($polaczenie->error);
        //echo $rezultat->num_rows;
        $maile_ilosc = $rezultat->num_rows;
        if($maile_ilosc>0)
        {
          $wszystko_ok=false;
          $_SESSION['e_email']="Istnieje już konto o tym adresie";
        }

        if($wszystko_ok==true)
        {
          //echo "wszystko jest okej";
          if($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL,'$email','$haslo_hash', 'NULL');"))
          {
            $_SESSION['udanarejestracja']=true;
            header('Location: witamy.php');
          }
          else
          {
            throw new Exception($polaczenie->error);
          }
        //INSERT INTO uzytkownicy
        }

        $polaczenie->close();
      }

  }
  catch (Exception $e)
  {
      echo '<span style="color:red">Błąd serwera</span>';
      //ECHO "<BR/>Informacja o błędzie ".$e;
  }




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
    <?php $config['index_page'] = '';?>
  </head>
  <body>
    <header class="main-header shadow p-3 row justify-content-md-center">
      <div class="title col-6">
        <a href=""><img src="./img/logo.png" class="logo mx-auto" alt="logo"></a>
        <div class="description d-none d-md-block"> Nauka języka angielskiego dla IT </div>
      </div>
    </header>

    <div class="container">
      <div class="content row justify-content-md-center">
        <form class="col col-lg-6" id="register" method="post">
          <fieldset style="margin-bottom: 15%;">
            <legend><h3> Rozpocznij przygodę z <span style="font-weight: bold; display: block;">Hello World!</span></h3></legend>
          </fieldset>
          <div class="form-group" style="margin-bottom: 5%;">
            <input required type="email" class="form-control" name="email" id="email" placeholder="E-mail" autofocus>
          </div>
        <?php
      			if (isset($_SESSION['e_email']))
      			{
      				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
      				unset($_SESSION['e_email']);
      			}
		     ?>
          <div class="form-group" style="margin-bottom: 5%;">
            <input required type="password" class="form-control" name="pass" id="pass" placeholder="Utwórz hasło">
          </div>
          <?php
            if (isset($_SESSION['e_haslo']))
            {
                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            }
         ?>
          <div class="form-group" style="margin-bottom: 5%;">
            <input required type="password" class="form-control" name="pass_repeat" id="pass_repeat" placeholder="Powtórz hasło">
          </div>

          <input type="Submit" class="btn btn-success" style="margin-bottom: 5%;" name="submit" value="Kontynuuj">
          <fieldset>
            lub<a href="logowanie"> zaloguj się</a>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- add javascript -->
    <script type="text/javascript" src="./js/index.js"></script>
  </body>
</html>
