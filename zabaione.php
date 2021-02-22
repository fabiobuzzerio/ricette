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
    <script type="text/javascript" src="main.js" async></script>
  </head>
  <body>
    <main>
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
    </main>
  </body>
</html>
