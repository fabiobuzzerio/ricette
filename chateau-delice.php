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
          <li>500 ml latte</li>
          <li>70 g cacao amaro</li>
          <li>4 cucchiai di zucchero</li>
          <li>4 tuorli d'uovo</li>
          <li>3 cucchiai di farina</li>
          <li>1 pandoro</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Per preparare la crema al cioccolato porre in un tegame da fuoco i tuorli e lo zucchero, mescolare bene e aggiungere la farina. Versare il latte a filo, poi mettere sul fuoco e cuocere finché la crema si sarà addensata. Aggiungere il cacao mescolando velocemente.
      </div>
      <div>
        Tagliare il pandoro a fette orizzontali. Ricoprire la prima fetta di pandoro con la crema ancora calda e sovrappore le altre fette intervallandole dalla crema. Infine, spolverare il pandoro farcito con del cacao amaro.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>