Zamykamy sesje zalogowanego uzytkownika i kierujemy sie na strone glowna

<?php

    session_start();

    session_unset();

    header('Location: index.php');

?>
