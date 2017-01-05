<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo POO</title>
  </head>
  <body>
    <?php
      include_once 'form.php';

      $formulaire = new Form();

      echo $formulaire->getformStart();
      echo $formulaire->getinputText();
      echo $formulaire->gettextarea();
      echo $formulaire->getradio();
      echo $formulaire->getFormEnd();


     ?>
  </body>
</html>
