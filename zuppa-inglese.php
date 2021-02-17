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
          <li>2 L latte</li>
          <li>500 g savoiardi</li>
          <li>400 g zucchero</li>
          <li>100 g burro</li>
          <li>100 g cacao</li>
          <li>6 cucchiai di farina</li>
          <li>4 bicchieri Marsala</li>
          <li>4 uova</li>
          <li>1 limone (scorza)</li>
          <li>q.b zucchero a velo</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Per prima cosa, preparare le due creme con cui verrà farcita la zuppa inglese. Rompere i 4 tuorli in una casseruola, incorporarvi 200 g di zucchero e montarli fino a quando saranno ben spumosi. Unire 3 cucchiai di farina (setacciata), amalgamando bene, e poi diluire il composto con un litro di latte. Aggiungere ora la scorza del limone e mettere la crema sul fuoco, mescolando continuamente, finché si sarà addensata. Preparare ora la crema al cioccolato: mescolare il cacao con i 200 g di zucchero, i 3 cucchiai di farina (setacciata) e il lattte rimanenti. Unire anche il burro sciolto precedentemente e mescolare fino a che comincerà ad ispessirsi e bollire.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
