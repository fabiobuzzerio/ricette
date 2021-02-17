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
          <li>300 g burro</li>
          <li>300 g zucchero</li>
          <li>300 g panna montata</li>
          <li>200 g fior di farina</li>
          <li>50 g cacao amaro</li>
          <li>5 uova</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Sbattere il burro (conservandone una noce) con una forchetta di legno e incorporarvi piano piano lo zucchero. Poi, sempre sbattendo, aggiungere i tuorli uno per volta e gli albumi montati a neve finissima. Infine incorporare la farina e il cacao. Spalmare con il rimanente burro una fonda tortiera e rovesciarvi il composto livellandone la superficie. Mettere il dolce in forno a fuoco moderato per 45 minuti. Appena fredda la torta, sfornarla e servirla guarnita di panna montata.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
