<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
      $file = basename(__FILE__, '.php');
      $link = mysqli_connect("localhost", "root", "", "ricette");
      $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='$file'");
      $pagina = mysqli_fetch_assoc($query);
      echo '<title>'.$pagina["titolo"].'</title>
            <link rel="icon" href="emoji/svg/'.$pagina["emoji"].'.svg" id="emoji">';
      mysqli_close($link);
    ?>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="main.js" defer></script>
  </head>
  <body>
    <main>
      <h2>Ingredienti</h2>
      <div>
        <ul>
          <li>300 g farina</li>
          <li>140 g zucchero</li>
          <li>100 g fecola (o maizena)</li>
          <li>100 g burro</li>
          <li>4 uova</li>
          <li>3 arance</li>
          <li>1 bustina lievito</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Tagliare il burro a cubetti e unirlo allo zucchero, lavorandoli con delle fruste elettriche fino ad ottenere una crema per circa 10 minuti. Unire le uova una per volta e, in seguito, la scorza delle arance. Incorporare il succo e continuare a mescolare per amalgamare completamente il composto. Aggiungere la farina, la fecola e il lievito setacciati. Versare l’impasto in uno stampo (imburrato e infarinato) da 28 cm di diametro e cuocere per circa 55 minuti in forno statico preriscaldato a 170 °C.
      </div>
    </main>
  </body>
</html>
