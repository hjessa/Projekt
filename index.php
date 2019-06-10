<?php

    session_start();

    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: zadania.php');
        exit();
    }

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="Stylesheet" href="style.css">
<title>Specialist English Transaltor</title>
</head>
<body>
    <div id="container">
        <div id="banner">
          <h1>TUTAJ BĘDZIE JAKIŚ BANER </h1>
        </div>
        <div class="clear"></div>
          <div id="menu">
              <ul>
                <li><h2><a href="">TUTAJ</a><h2></li>
                <li><h2><a href="">BĘDZIE</a><h2></li>
                <li><h2><a href="">JAKIEŚ</a><h2></li>
                <li><h2><a href="">TAM</a><h2></li>
                <li><h2><a href="">MENU</a><h2></li>
              </ul>
          </div>
          <div id="panel">
            <form action="zaloguj.php" method="post">
              email:<br>
              <input type="text" name="email" value="">
              <br>
              PASSWORD:<br>
              <input type="text" name="haslo" value="">
              <br>
              <input type="submit" value="zaloguj się">
            </form>
            <?php
    if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
?>
          </div>
          <div class="clear"></div>
          <div id="home">
              Lorem ipsum dolor sit amet, est libris consulatu eu, has dicat clita facilis ad. Id sed velit epicurei, vim veritus oportere elaboraret at, semper cetero ad sit. Mei ut odio errem, no erat nominati sed. Ut mea duis epicurei. Vel nonumes vivendum necessitatibus et, legere tractatos delicatissimi no cum, est tibique denique signiferumque no.

              Et vel graeco delenit vivendo, cu quem elitr detraxit nec. Eam ut nisl dolor definitiones, modus dissentiet est ea. His et impetus percipitur delicatissimi. Nec erroribus inciderint ad, mel ei cotidieque efficiantur, prima menandri qui at. Harum patrioque ut nam, quo case principes et, no bonorum habemus officiis vix. In est graeci ornatus mandamus, pri ne possim admodum postulant.

              Qui te audiam eripuit signiferumque. Postea deleniti expetendis sit ex, eum decore delicata ex. Consulatu voluptatum referrentur id nec. Impedit mentitum comprehensam cum ex. Volumus pericula et mea, te cum sale commune antiopam, ex quo simul graeco.

              Eos eu dicat graece. Vim quidam appellantur ne. An sit aperiri dissentiunt interpretaris, sea te facilis assueverit ullamcorper. Et quidam iriure mei, duo te erat ridens. Mea purto saperet moderatius ad, sonet soluta sed at.

              Expetenda intellegebat qui an, fugit zril id mea, vix regione aliquid euripidis ea. Et vix suscipiantur interpretaris, unum legendos ut eam. Brute commune per ex. Te etiam gloriatur vix, probo summo solet cu nec. Ex vim harum virtute. No nam iusto scripta, mei te affert timeam concludaturque.
              Lorem ipsum dolor sit amet, est libris consulatu eu, has dicat clita facilis ad. Id sed velit epicurei, vim veritus oportere elaboraret at, semper cetero ad sit. Mei ut odio errem, no erat nominati sed. Ut mea duis epicurei. Vel nonumes vivendum necessitatibus et, legere tractatos delicatissimi no cum, est tibique denique signiferumque no. Et vel graeco delenit vivendo, cu quem elitr detraxit nec. Eam ut nisl dolor definitiones, modus dissentiet est ea. His et impetus percipitur delicatissimi. Nec erroribus inciderint ad, mel ei cotidieque efficiantur, prima menandri qui at. Harum patrioque ut nam, quo case principes et, no bonorum habemus officiis vix. In est graeci ornatus mandamus, pri ne possim admodum postulant. Qui te audiam eripuit signiferumque. Postea deleniti expetendis sit ex, eum decore delicata ex. Consulatu voluptatum referrentur id nec. Impedit mentitum comprehensam cum ex. Volumus pericula et mea, te cum sale commune antiopam, ex quo simul graeco. Eos eu dicat graece. Vim quidam appellantur ne. An sit aperiri dissentiunt interpretaris, sea te facilis assueverit ullamcorper. Et quidam iriure mei, duo te erat ridens. Mea purto saperet moderatius ad, sonet soluta sed at. Expetenda intellegebat qui an, fugit zril id mea, vix regione aliquid euripidis ea. Et vix suscipiantur interpretaris, unum legendos ut eam. Brute commune per ex. Te etiam gloriatur vix, probo summo solet cu nec. Ex vim harum virtute. No nam iusto scripta, mei te affert timeam concludaturque.Lorem ipsum dolor sit amet, est libris consulatu eu, has dicat clita facilis ad. Id sed velit epicurei, vim veritus oportere elaboraret at, semper cetero ad sit. Mei ut odio errem, no erat nominati sed. Ut mea duis epicurei. Vel nonumes vivendum necessitatibus et, legere tractatos delicatissimi no cum, est tibique denique signiferumque no. Et vel graeco delenit vivendo, cu quem elitr detraxit nec. Eam ut nisl dolor definitiones, modus dissentiet est ea. His et impetus percipitur delicatissimi. Nec erroribus inciderint ad, mel ei cotidieque efficiantur, prima menandri qui at. Harum patrioque ut nam, quo case principes et, no bonorum habemus officiis vix. In est graeci ornatus mandamus, pri ne possim admodum postulant. Qui te audiam eripuit signiferumque. Postea deleniti expetendis sit ex, eum decore delicata ex. Consulatu voluptatum referrentur id nec. Impedit mentitum comprehensam cum ex. Volumus pericula et mea, te cum sale commune antiopam, ex quo simul graeco. Eos eu dicat graece. Vim quidam appellantur ne. An sit aperiri dissentiunt interpretaris, sea te facilis assueverit ullamcorper. Et quidam iriure mei, duo te erat ridens. Mea purto saperet moderatius ad, sonet soluta sed at. Expetenda intellegebat qui an, fugit zril id mea, vix regione aliquid euripidis ea. Et vix suscipiantur interpretaris, unum legendos ut eam. Brute commune per ex. Te etiam gloriatur vix, probo summo solet cu nec. Ex vim harum virtute. No nam iusto scripta, mei te affert timeam concludaturque.Lorem ipsum dolor sit amet, est libris consulatu eu, has dicat clita facilis ad. Id sed velit epicurei, vim veritus oportere elaboraret at, semper cetero ad sit. Mei ut odio errem, no erat nominati sed. Ut mea duis epicurei. Vel nonumes vivendum necessitatibus et, legere tractatos delicatissimi no cum, est tibique denique signiferumque no. Et vel graeco delenit vivendo, cu quem elitr detraxit nec. Eam ut nisl dolor definitiones, modus dissentiet est ea. His et impetus percipitur delicatissimi. Nec erroribus inciderint ad, mel ei cotidieque efficiantur, prima menandri qui at. Harum patrioque ut nam, quo case principes et, no bonorum habemus officiis vix. In est graeci ornatus mandamus, pri ne possim admodum postulant. Qui te audiam eripuit signiferumque. Postea deleniti expetendis sit ex, eum decore delicata ex. Consulatu voluptatum referrentur id nec. Impedit mentitum comprehensam cum ex. Volumus pericula et mea, te cum sale commune antiopam, ex quo simul graeco. Eos eu dicat graece. Vim quidam appellantur ne. An sit aperiri dissentiunt interpretaris, sea te facilis assueverit ullamcorper. Et quidam iriure mei, duo te erat ridens. Mea purto saperet moderatius ad, sonet soluta sed at. Expetenda intellegebat qui an, fugit zril id mea, vix regione aliquid euripidis ea. Et vix suscipiantur interpretaris, unum legendos ut eam. Brute commune per ex. Te etiam gloriatur vix, probo summo solet cu nec. Ex vim harum virtute. No nam iusto scripta, mei te affert timeam concludaturque.
          </div>
          <div id="footer">
            <h3>TUTAJ BĘDZIE STOPKA</h3>
          </div>

    </div>
</body>
</html>
