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
          <li>400 g farina</li>
          <li>400 g zucchero</li>
          <li>240 ml olio evo</li>
          <li>80 ml acqua fredda</li>
          <li>80 ml limoncello</li>
          <li>4 uova</li>
          <li>1 bustina lievito per dolci</li>
          <li>1 limon (scorza)</li>
          <li>q.b sale</li>
          <li>frutta secca</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Stampo da ciambella. 35/40 minuti, forno statico
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
