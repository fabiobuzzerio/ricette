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
          <li>1 kg pere</li>
          <li>220 g farina</li>
          <li>150 g burro</li>
          <li>90 g fecola di patate (o maizena)</li>
          <li>3 uova</li>
          <li>1 bustina di lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Tagliare il burro a cubetti e unirlo allo zucchero, lavorandoli con delle fruste elettriche fino ad ottenere una crema per circa 10 minuti. Unire le uova una per volta. Sbucciare le pere, tagliarle a pezzettini e frullarle, aggiungendo del succo di limone per non farle annerire. Incorporare le pere, la farina e la fecola alternativamente e continuare a mescolare per amalgamare completamente il composto. Infine, unire il lievito. Versare l’impasto in uno stampo (imburrato e infarinato) da 28 cm di diametro e cuocere per circa 50 minuti in forno statico preriscaldato a 160 °C.
      </div>
      <div>
        Per farcire la torta, consultare la ricetta della <a class="pagineLink" href="ganache-cioccolato"><img src="../svg/1f36b.svg"><span>Ganache al cioccolato</span></a>.
        </div>
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>

  </body>
</html>
