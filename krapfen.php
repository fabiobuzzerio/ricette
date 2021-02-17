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
          <li>150 g farina</li>
          <li>100 g fecola di patate</li>
          <li>60 g burro</li>
          <li>50 g latte</li>
          <li>4 tuorli d'uovo</li>
          <li>2 cucchiai zucchero</li>
          <li>½ bustina di lievito</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Mescolare a parte la farina con la fecola di patate. Incorporare tutti gli altri ingredienti secondo logica e fare una pasta dura. Quindi stenderla e ricavare dei dischetti ai quali si aggiungerà della marmellata a piacere.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>