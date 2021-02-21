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
          <li>1 L alcool</li>
          <li>1 L acqua</li>
          <li>600 g zucchero</li>
          <li>10 arance</li>
          <li>4 limoni</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        In un recipiente capace unire le bucce delle arance e dei limoni, l'alcool, l'acqua e lo zucchero. Tappare bene e lasciare macerare per 40 giorni, provvedendo a scuotere il contenuto ogni giorno. Alla fine, filtrarlo.
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
