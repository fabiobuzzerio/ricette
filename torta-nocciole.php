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
          <li>200 g farina</li>
          <li>200 g zucchero</li>
          <li>150 g nocciole</li>
          <li>100 g burro</li>
          <li>3 uova</li>
          <li>1 bustina lievito per dolci</li>
          <li>1 limone</li>
          <li>1 cucchiaio olio evo</li>
          <li>½ bicchiere latte</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Pelare le nocciole lessandole per un attimo in forno in modo che la pellicina si raffrinsisca (?) e sia più facile da togliere. Tritarle finemente. In una terrina lavorare le uova, il burro, la farina mescolata la lievito, lo zucchero, le nocciole tritate, un cucchiaio di olio, il latte e la scorza grattuggiata di un limone. Mescolare il composto sino a che risulti omogeneo e versarlo in una teglia inburrata e infarinata. Porre poi in forno per 30 minuti e servire freddo.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
