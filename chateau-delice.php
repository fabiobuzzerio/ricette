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
    </main>
  </body>
</html>
