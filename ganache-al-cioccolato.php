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
          <li>200 g panna liquida fresca da montare</li>
          <li>200 g cioccolato fondente</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Tritare il cioccolato  grossolanamente. Porre in un pentolino la panna e portare a bollore. Successivamente, togliere la panna dal fuoco e unire il cioccolato alla panna nel pentolino. Girare il composto con una frusta a mano fino ad ottenere un composto omogeneo, liscio, privo di grumi.
      </div>
      <div>
        A questo punto è possibile utilizzare subito la ganache versandola ancora tiepida (non calda) solo se è necessario riempire una crostata o realizzare dei cestini o crostatine. Al contrario, se si intende farcire e decorare torte, stuccarle, fare decori, riempire bignè dolci, realizzare dolci al bicchiere, ecc. è necessario aspettare che raggiunga la consistenza giusta, lasciandola a temperatura ambiente per 1 – 2 ore.
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
