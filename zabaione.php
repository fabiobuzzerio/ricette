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
          <li>8 cucchiai di Marsala</li>
          <li>4 tuorli d'uovo</li>
          <li>4 cucchiai di zucchero</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Mettere in una casseruola fonda i tuorli d'uovo, lo zucchero e il Marsala e sistemarla dentro un'altra casseruola più grande precedentemente riempita di acqua calda. Portare tutto sul fuoco. Lavorare le uova e il resto con una frusta per salsa o con il frullino di legno. Il composto si addenserà in modo da formare una massa soffice e compatta. Lo zabaione non deve bollire e va servito caldo.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
