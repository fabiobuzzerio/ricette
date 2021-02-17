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
      echo '<link rel="icon" href="svg/'.$pagina["emoji"].'.svg" id="emoji">
            <title>'.$pagina["titolo"].'</title>';
mysqli_close($link);
    ?>
  </head>
  <body>
    <article>
      <h2>Ingredienti</h2>
      <div>
        <ul>
          <li>400 g banane</li>
          <li>200 g farina</li>
          <li>200 g zucchero</li>
          <li>160 g burro</li>
          <li>70 g cacao amaro</li>
          <li>70 g fecola di patate (o maizena)</li>
          <li>3 uova</li>
          <li>1 bustina di lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        In un'altra ciotola tagliare il burro a cubetti e unirlo allo zucchero, lavorandoli con una frusta fino ad ottenere una crema. Unire le uova una per volta e montare il composto con delle fruste elettriche. Sbucciare le banane, tagliarle a rondelle e schiacciarle con una forchetta per ridurle in purea. Aggiungere all’impasto la purea di banane e un pizzico di sale e, successivamente, la farina, il cacao, la fecola di patate (o maizena) e il lievito setacciati. Versare l’impasto in uno stampo (imburrato e infarinato) da 28 cm di diametro e cuocere per circa 40 minuti in forno statico preriscaldato a 170 °C.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
