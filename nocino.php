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
          <li>1 ½ L spirito</li>
          <li>400 ml acqua</li>
          <li>75 g zucchero</li>
          <li>2 g cannella regina tritata</li>
          <li>30 noci col mallo</li>
          <li>10 chiodi di garofano</li>
          <li>1 limone (scorza)</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Tagliare le noci in quattro spicchi e metterle in infusione con tutti gli ingredienti in una damigiana o un fiasco della capacità di quattro o cinque litri. Chiuderlo bene e tenerlo per quaranta giorni in un luogo caldo, scuotendo a quando a quando il vaso. Colare il liquore da un pannolino e poi, per averlo ben chiaro, passarlo per cotone o carta, ma qualche giorno prima assaggiarlo, perché se risulta troppo alcolico è possibile aggiungere un bicchiere d'acqua.
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>

  </body>
</html>
