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
  <body>
    <main>
      <h2>Ingredienti</h2>
      <div>
        <ul>
          <li>200 g biscotti secchi</li>
          <li>100 g burro</li>
          <li>100 g cacao amaro</li>
          <li>100 g mandorle</li>
          <li>100 g zucchero</li>
          <li>4 cucchiai di liquore dolce a piacere (Sassolino o Curaçao)</li>
          <li>3 tuorli</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Lavorare il burro fino a renderlo bianco e spumoso. Aggiungere lo zucchero e il cacao setacciati insieme, le mandorle tritate finemente e i biscotti tritati grossolanamente. Aggiungere il liquore e lavorare il composto, arrotolandolo con le mani, per dargli la forma di un salame. Avvolgerlo strettamente in carta vegetale imburrata, chiudendolo alle estremità. Tenere in frigorifero per circa 3-4 ore. Servire a fette.
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
