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
      <h3>Per l'impasto</h3>
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
      <h3>Per la farcitura</h3>
      <ul>
        <li><a class="pagineLink" href="ganache-al-cioccolato"><img src="emoji/svg/1f36b.svg"><span>Ganache al cioccolato</span></a></li>
      </ul>
      <h2>Procedimento</h2>
      <div>
        Tagliare il burro a cubetti e unirlo allo zucchero, lavorandoli con delle fruste elettriche fino ad ottenere una crema per circa 10 minuti. Unire le uova una per volta. Sbucciare le pere, tagliarle a pezzettini e frullarle, aggiungendo del succo di limone per non farle annerire. Incorporare le pere, la farina e la fecola alternativamente e continuare a mescolare per amalgamare completamente il composto. Infine, unire il lievito. Versare l’impasto in uno stampo (imburrato e infarinato) da 28 cm di diametro e cuocere per circa 50 minuti in forno statico preriscaldato a 160 °C.
      </div>
    </main>
  </body>
</html>
