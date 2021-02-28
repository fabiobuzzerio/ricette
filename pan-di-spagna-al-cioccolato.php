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
          <li>160 g farina</li>
          <li>150 g zucchero</li>
          <li>40 g cacao amaro</li>
          <li>5 uova</li>
          <li>1 bustina vaniglina</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Battere le uova intere con lo zucchero fino a far diventare il composto morbido e spumoso. Aromatizzare con la vaniglina e incorporare la farina e il cacao. Versare l'impasto in uno stampo imburrato e infarinato e infornare per circa 40 minuti a 190 °C. Lasciare raffreddare prima di sformare.
      </div>
    </main>
  </body>
</html>
