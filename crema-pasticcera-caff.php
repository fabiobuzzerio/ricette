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
          <li>250 ml latte</li>
          <li>70 g zucchero</li>
          <li>25 g farina</li>
          <li>3 uova</li>
          <li>1 moka media</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Fare il caffè in una moka media. Tenere da parte mezzo bicchiere di latte (preso dal totale) e far sobbollire il resto in una casseruola, poi toglierlo dal fuoco e aggiungere il caffè. In una ciotola lavorare le uova con lo zucchero usando uno sbattitore elettico, fino a ottenere una crema spumosa. Versare nel composto di uova un terzo del latte e caffè tiepidi a filo. Successivamente, incorporare la farina settacciata. Continuare a sbattere con le fruste elettriche il composto e aggiungerlo nella casseruola con il latte e il caffè.
        A questo punto, portare ad ebollizione il tutto e, mescolando continuamente, lasciare sobbollire a fuoco dolce per alcuni minuti, sbattendo di continuo con la frusta per evitare che si formino grumi e alternando l'aggiunta del latte freddo tenuto da parte finché il composto si sarà addensato. Spegnere il fuoco e lasciare raffreddare la crema, mescolando di tanto in tanto.
      </div>
    </main>
  </body>
</html>
