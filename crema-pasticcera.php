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
          <li>750 ml latte</li>
          <li>150 g zucchero</li>
          <li>100 g farina</li>
          <li>5 tuorli d'uovo</li>
          <li>1 bastoncino di vaniglia</li>
          <li>1 limone (scorza)</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Far bollire il latte con la vaniglia. In una casseruola montare i tuorli d'uovo con lo zucchero. Quando le uova avranno preso volume, unire la farina e, continuando a mescolare, versare a filo il latte tiepido. Aggiungere la scorza di limone e porre il composto sul fuoco. Continuare a mescolare affinché non si formino grumi. Quando la crema bollirà, lasciarla cuocere ancora per 5 minuti. Lasciar raffreddare mescolando. Pria di utilizzare togliere la scorza del limone.
      </div>
    </main>
  </body>
</html>
