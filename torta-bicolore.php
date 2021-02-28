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
          <li>400 g farina</li>
          <li>400 g zucchero</li>
          <li>200 g burro</li>
          <li>50 g cacao amaro</li>
          <li>6 uova</li>
          <li>1 bicchiere latte</li>
          <li>1 bustina lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Montare a spuma il burro, aggiungere pian piano lo zucchero e, uno a uno, i tuorli d'uovo. Incorporare la farina e il lievito setacciati e il latte a filo. Montare a neve gli albumi e unirli al composto. Dividere in due l'impasto e, in una delle parti, aggiungere il cacao. Infine, versare alternativamente, in una tortiera imburrata e infarinata, una parte del composto normale e una parte di quello al cacao. Infornare a calore moderato per 50 minuti circa.
      </div>
    </main>
  </body>
</html>
