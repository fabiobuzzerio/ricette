<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <?php
      $file = basename(__FILE__, '.php');
      $link = mysqli_connect("localhost", "root", "", "ricette");
      $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='$file'");
      $pagina = mysqli_fetch_assoc($query);
      echo '<link rel="icon" href="emoji/svg/'.$pagina["emoji"].'.svg" id="emoji">
            <title>'.$pagina["titolo"].'</title>';
mysqli_close($link);
    ?>
  </head>
  <body>
    <main>
      <h2>Ingredienti</h2>
      <div>
        <ul>
          <li>250 g farina</li>
          <li>150 g zucchero</li>
          <li>70 g burro</li>
          <li>60 g fecola di patate (o maizena)</li>
          <li>5 pesche</li>
          <li>4 uova</li>
          <li>1 bustina di lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Montare le uova con lo zucchero fino a quando saranno diventate bianche e spumose, occorreranno circa 10 minuti. Unire il burro tagliato a cubetti e continuare a mescolare. Aggiungere la farina e la fecola setacciate. Sbucciare e tagliare 3 pesche a cubetti e incorporarle all’impasto. Versare l’impasto in uno stampo (imburrato e infarinato) da 28 cm di diametro e decorare la superficie con le due pesche rimanenti. Cuocere per circa 50 minuti in forno statico preriscaldato a 170 °C.
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>

  </body>
</html>
