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
          <li>180 g farina</li>
          <li>150 g latte</li>
          <li>150 g zucchero</li>
          <li>75 g burro</li>
          <li>50 g cacao amaro</li>
          <li>50 g fecola di patate (o maizena)</li>
          <li>4 uova</li>
          <li>1 bustina di lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Montare le uova intere con lo zucchero per circa 10 minuti, in modo da ottenere un composto chiaro e spumoso. Incorporare la farina, il cacao e il lievito setacciati poco alla volta in modo da amalgamarli per bene. In un pentolino, riscaldare il latte con il burro in modo che si sciolga completamente; appena sfiora il bollore, togliere dal fuoco. Incorporare il liquido a filo nel composto. Versare l’impasto in uno stampo (imburrato e infarinato) da 28 cm di diametro e cuocere per circa 45-50 minuti in forno statico preriscaldato a 180 °C.
      </div>
    </main>
  </body>
</html>
