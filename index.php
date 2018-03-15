<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Osobní profil</h1>
    <p>První PHP skript teď už s trochou PHP</p>
    <p>Hungry boi does a nomm. Heckin good.</p>

    <?php
    $firstname="Matěj";
    $lastname="Dalekorej";
    $age=15;
    $school="ZŠ T.G.M. Poděbrady";
    ?>

 
    <p>Ahoj. Já jsem <?php echo "$firstname";?></p>
    <p>Mám příjmení <?php echo "$lastname";  ?></p>
    <p>Je mi <?php echo "$age let"; ?></p>
    <p>Chodil jsem na školu <?php echo "$school"; ?></p>


  </body>
</html>
