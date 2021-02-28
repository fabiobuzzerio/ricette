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
      <h3>Per lo sciroppo</h3>
      <div>
        <ul>
          <li>230 g acqua</li>
          <li>230 g zucchero</li>
          <li>70 g burro</li>
        </ul>
      </div>
      <h3>Per l'impasto</h3>
      <div>
        <ul>
          <li>260 g sciroppo di menta</li>
          <li>240 g farina</li>
          <li>145 g latte</li>
          <li>100 g burro</li>
          <li>100 g zucchero</li>
          <li>90 g fecola di patate (o maizena)</li>
          <li>5 uova</li>
          <li>1 bustina di lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Preparare lo sciroppo alla menta il giorno prima nel seguente modo: mettere in un mixer la menta sfogliata, lo zucchero e frullare per bene il tutto. In un pentolino versare l’acqua e aggiungere il mix di menta e zucchero. A fiamma media scaldare il tutto e togliere dal fuoco solo quando avrà preso bollore. Trasferire lo sciroppo alla menta in un barattolo e una volta tiepido riporlo in frigo, facendolo macerare tutta la notte. Il giorno dopo riprendere lo sciroppo, filtrarlo con un colino a maglie strette per eliminare i residui di menta tritata e tenerlo da parte in una ciotola.
      </div>
      <div>
        Ora è possibile procedere con la preparazione della torta: in una ciotola porre il burro a pezzetti e lo zucchero, montare il composto con delle fruste elettriche e lavorarlo finché non risulterà spumoso. Aggiungere le uova una alla volta, continuando a lavorare con le fruste per amalgamare il tutto. Dunque versare il latte e lo sciroppo alla menta; poi continuando a lavorare l’impasto con le fruste, aggiungere la farina, la fecola e il lievito fino a ottenere un composto omogeneo. Versare l’impasto in uno stampo (imburrato e infarinato) da 28 cm di diametro e cuocere per circa 40 minuti in forno statico preriscaldato a 170 °C.
      </div>
    </main>
  </body>
</html>
