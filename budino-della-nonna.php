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
          <li>1 L latte</li>
          <li>200 g zucchero</li>
          <li>100 g farina</li>
          <li>10 cucchiai Amaretto di Saronno</li>
          <li>4 uova</li>
          <li>2 cucchiai cacao sciolto in poco latte</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        In una terrina sbattere le uova intere con lo zucchero, unire poco alla volta la farina setacciata, il latte e in ultimo il liquore. Versare il composto in un pentolino e a calore moderato cuocere mescolato continuamente fino a quando il composto avrà raggiunto una certa consistenza. Versare sul fondo di uno stampo il cacao diluito con il latte e su questo il budino appena tolto dal fuoco, lasciar raffreddare e mettere in frigo fino al momento di servire.
      </div>
    </main>
  </body>
</html>
