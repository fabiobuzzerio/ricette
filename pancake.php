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
    <script type="text/javascript" src="main.js" async></script>
  <body>
    <main>
      <h2>Ingredienti (4 persone)</h2>
      <div>
        <ul>
          <li>300 g latte</li>
          <li>200 g farina</li>
          <li>40 g burro</li>
          <li>20 g zucchero</li>
          <li>3 uova</li>
          <li>½ bustina di lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Far sciogliere il burro e lascialo intiepidire. Unire burro, tuorli e un pizzico di sale, mescolando per bene con una frusta. Unire il latte a filo. Unire la farina setacciata e il lievito. Montare gli albumi a neve con lo zucchero e incorporarli all'impasto. Verranno fuori circa 18 pancakes medio-piccoli.
      </div>
    </main>
  </body>
</html>
