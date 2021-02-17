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
          <li>250 g farina</li>
          <li>200 g zucchero</li>
          <li>100 g burro</li>
          <li>100 g nocciole tritate fini</li>
          <li>6 cucchiai Amaretto di Saronno</li>
          <li>3 uova</li>
          <li>1 bustina lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        In una terrina lavorare il burro ammorbidito con lo zucchero, unire le uova e quando il composto risulterà spumoso aggiungere le nocciole, il liquore, la farina setacciata e il lievito. Amalgamare il composto e versalo in una tortiera imburrata e infarinata. Cuocere in forno già caldo a 220 °C per 30 minuti circa.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
