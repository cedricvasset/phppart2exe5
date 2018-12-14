<?php
$gender = 'fgsfghsfd'
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part1 ex5</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p>
    <?php
    /*  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';*/
    if (preg_match('#Homme#', $gender)) { ?>
      <p id="men"> C'est un développeur !!!</p>
    <?php }elseif(preg_match('#Femme#', $gender)){ ?>
      <p id="women"> C'est une développeuse !!!</p>
    <?php }else{ ?>
      <p id="badword"> variable non valide!!!!!</p>
    <?php }?>
  </p>
</body>
</html>
