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
          <li>3 uova</li>
          <li>2 vasetti di yogurt</li>
          <li>2 vasetti di zucchero</li>
          <li>4 vasetti di farina</li>
          <li>3/4 vasetti di olio</li>
          <li>1 bustina di lievito</li>
          <li>qb. sale</li>
          <li>aromi a piacere</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Cuocere in forno a 175 °C per 15 minuti
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>