<?php
session_start();
if(isset($_POST['email']))
{
    $wszystko_ok = true;

    $email = $_POST['email'];
    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];


    //sprawadz EMAIL, spejclany filtr maili
  //  $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
  //  if((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
  //  {
  //    $wszystko_ok = false;
  //    $_SESSION['e_email'] = "Podaj poprawny adres email";
  //  }

  //sprawdz poprawnosc hasla
  if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
        {
            $wszystko_OK=false;
            $_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
        }
  if($haslo1!=$haslo2)
  {
    $wszystko_OK=false;
    $_SESSION['e_haslo']="podane hasła nie są identyczne";
  }


  $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
  echo $haslo_hash; exit();
  //echo password_get_info($haslo_hash);
  if($wszystko_ok==true)
  {
    echo "wszystko jest okej";
  //INSERT INTO uzytkownicy
  }
//$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly

}
 ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="Stylesheet" href="style.css">
<title>Specialist English Transaltor</title>
<style>
       .error
       {
           color:red;
           margin-top: 10px;
           margin-bottom: 10px;
       }
   </style>
</head>
<body>
  <form method="post">

    EMAIL: <br/><input type="email" name="email"/></br>
    Haslo: <br/><input type="password" name="haslo1"/></br>
    <?php
            if (isset($_SESSION['e_haslo']))
            {
                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            }
        ?>
    Powtorz haslo: <br/><input type="password" name="haslo2"/></br>

    <label><input type="checkbox" name="regulamin"/> Akceptuje Regulamin</label>
    <br/><input type="submit" value="zarejestruj sie"/>
  </form>

</body>
</html>
