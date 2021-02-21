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
      echo '<link rel="icon" href="emoji/svg/'.$pagina["emoji"].'.svg" id="emoji">
            <title>'.$pagina["titolo"].'</title>';
mysqli_close($link);
    ?>
  </head>
  <body>
    <main>
      <h2>Ingredienti</h2>
      <div>
        <ul>
          <li>500 g spirito di vino del migliore</li>
          <li>500 g zucchero a velo</li>
          <li>500 ml latte</li>
          <li>½ baccello vaniglia</li>
          <li>1 limone</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Sminuzzare tutto intero il limone togliendone i semi e unendovi la buccia grattata in precedenza, dividere in piccoli pezzetti la vainiglia, mescolare poi tutto il resto insieme entro a un vaso di vetro e vedere che subito il latte impazzisce. Agitare il vaso una volta al giorno e dopo otto giorni passarlo per pannolino e filtrarlo per carta.
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
