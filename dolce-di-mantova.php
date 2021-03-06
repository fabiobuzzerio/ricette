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
          <li>450 g fecola di patate</li>
          <li>250 g zucchero</li>
          <li>250 g burro</li>
          <li>4 uova</li>
          <li>1 bustina lievito per dolci</li>
          <li>q.b sale</li>
          <li>q.b zucchero a velo</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        In una terrina lavorare il burro ammorbidito con lo zucchero ed aggiungere, uno per volta, i tuorli d'uovo. Unire la fecola e gli albumi montati a neve ai quali è stato aggiunto un pizzico di sale per favorire l'operazione. Incorporare, da ultimo, il lievito, avendo cura di ben amalgamarlo. Travasare in uno stampo imburrato e spolverato di farina e passare subito in forno caldo a temperatura moderata. Cuocere per 50 minuti e lascaire il dolce, a forno spento, per altri 5 minuti. Appena sfornato cospargerlo di zucchero a velo.
      </div>
    </main>
  </body>
</html>
