<?php
//@echo sprawdzenie czy zostały wypełnione pola w fomrularzu e-mail oraz haslo,
//jesli nie zakoncz instrukcje i cofnij sie do index.php, w przeciwnym wypadku wykonaj
//kod z pliku connect.php, zadeklaruj zmienną połączenie w której wykonujemy łączenie do bazy,
//jeżeli wystąpi błąd podaj kod błędu, jeżeli nie pobierz zmienne email i haslo, kolejna instrukcja warunkowa
//sprawdza czy zapytanie sie wykona + mysqli_real_escape_string -> funkcja zabezpieczajaca
//jezeli podane zostalo prawidlowe haslo i login, user ma status zalogowanego i wyciagamy z bazy
//jego rekord + nie ustawiamy bledu dla index.php i kierujemy sie na podstrone z zadaniami
//w przeciwnym wypadku ustawiamy zmienna blad jako nieprawidlowe haslo lub mail

    session_start();

    if ((!isset($_POST['email'])) || (!isset($_POST['haslo'])))
    {
        header('Location: index.php');
        exit();
    }


    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }
    else
    {
        $email = $_POST['email'];
        $haslo = $_POST['haslo'];

        if ($rezultat = @$polaczenie->query(
        sprintf("SELECT * FROM uzytkownicy WHERE email='%s' ",
        mysqli_real_escape_string($polaczenie,$email))))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                $wiersz = $rezultat->fetch_assoc();
                if (password_verify($haslo, $wiersz['Haslo']))
                				{
                					$_SESSION['zalogowany'] = true;
                					$_SESSION['id'] = $wiersz['ID'];
                					$_SESSION['email'] = $wiersz['Email'];
                					$_SESSION['konto'] = $wiersz['Konto'];


                					unset($_SESSION['blad']);
                					$rezultat->free_result();
                					header('Location: zadania.php');
                				}

                				else
                				{
                					$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                					header('Location: index.php');
                				}

              }
              else

            {

                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy email lub hasło!</span>';
                header('Location: index.php');

            }

        }

        $polaczenie->close();
    }

?>
