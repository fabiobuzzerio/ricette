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
          <li>300 g di mascarpone</li>
          <li>150 g di burro</li>
          <li>100 g di zucchero a velo</li>
          <li>50 g di zucchero</li>
          <li>1 pan di Spagna al cioccolato</li>
          <li>caffè in grani</li>
          <li>caffè</li>
          <li>rhum</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Montare a crema il burro con 50 g di zucchero a velo, incorporare poi, a filo, mezza tazzina di caffè ristretto. Ripetere lo stesso procedimento per il mascarpone: aggiungere lo zucchero a velo e poi 1 tazzina di caffè. Tagliare con un coltello largo e affilato il pan di Spagna in tre dischi di ugual spessore. In una piccola casseruola versare mezzo bicchiere di rhum, 50 g di zucchero e mezzo bicchiere di acqua. Lasciare sul fuoco fino a quando lo zucchero sarà completamente sciolto. Aiutandosi con un pennello, inzuppare con questo composto i tre dischi di pan di Spagna. Servendosi della lama di un coltello, spalmare il disco che formerà la base della torta con metà della crema di mascarpone. Sovrapporre il secondo disco ripetendo la stessa operazione. Ricoprire con l'ultimo disco e spalmare la superficie di questo con un sottile strato di crema al burro. Porre la quantità avanzata di questa crema in una siringa da dolci e decorare il bordo della torta. Disporre internamente alla guarnizione di crema una fila di chicchi di caffè e completare decorando in questo modo tutta la superficie.
      </div>
    </main>
  </body>
</html>
