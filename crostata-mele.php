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
      <h3>Per il ripieno</h3>
      <div>
        <ul>
          <li>400 g mele</li>
          <li>100 g zucchero</li>
          <li>80 g noci (gherigli)</li>
          <li>50 g burro</li>
        </ul>
      </div>
      <h3>Per l'impasto</h3>
      <div>
        <ul>
          <li>170 g zucchero</li>
          <li>100 g fecola di patate</li>
          <li>80 g burro</li>
          <li>80 g farina</li>
          <li>2 uova</li>
          <li>1 bustina lievito per dolci</li>
          <li>1 limone</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Con della carta di alluminio foderare una tortiera dal bordo apribile. Con del burro fuso a bagnomaria ungere tutta la carta, poi cospargela di zucchero. Dopo aver sbucciato le mele, tagliarle a fettine di media grandezza e disporle nella tortiera, in senso circolare, riempiendo gli spazi vuoti con dei gherigli.
      </div>
      <div>
        Per preparare la pasta, montare a crema il burro e incorporarvi lo zucchero un po' alla volta. Quando il composto sarà omogeneo, aggiungervi le uova (prima i tuorli, poi gli albumi montati a neve), la scorza grattuggiata e il succo del limone. Incorporare la farina, la fecola e il lievito setacciati, unendo il tutto e continuando a mescolare. Verare quindi il composto sulle mele poste nella tortiera e mettere in forno per 45 minuti circa.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
