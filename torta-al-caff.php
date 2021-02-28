
<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <?php
      $file = basename(__FILE__, '.php');
      $link = mysqli_connect("localhost", "root", "", "ricette");
      $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='$file'");
      $pagina = mysqli_fetch_assoc($query);
      echo '<link rel="icon" href="emoji/svg/'.$pagina["emoji"].'.svg" id="emoji">
      <title>'.$pagina["titolo"].'</title>';
    ?>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <script type="text/javascript" src="main.js" defer></script>
  </head>
  <body>
    <main>
      <h2>Ingredienti</h2>
      <div>
        <ul><li>300 g farina</li><li>270 g caffè</li><li>200 g burro</li><li>200 g zucchero</li><li>100 g fecola di patate (o amido di mais)</li><li>4 uova</li><li>1 bustina lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>Fare il caffè. Tagliare il burro a cubetti e unirlo a metà dello zucchero previsto, lavorandoli con delle fruste elettriche fino ad ottenere una crema spumosa per circa 10 minuti. Unire i tuorli uno per volta. Incorporare alternativamente il caffè a filo (freddo) e la farina e la fecola setacciate. Montare a neve gli albumi con lo zucchero rimanente. Aggiungere il lievito all'impasto e, successivamente, incorporare gli albumi. Versare il composto in uno stampo (imburrato e infarinato) da 28 cm di diametro e cuocere per circa 60 minuti in forno statico preriscaldato a 170 °C.
      </div>
    </main>
  </body>
</html>