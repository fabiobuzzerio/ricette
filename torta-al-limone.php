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
          <li>220 g farina</li>
          <li>150 g zucchero</li>
          <li>150 g burro</li>
          <li>100 g fecola di patate (o amido di mais)</li>
          <li>4 limoni</li>
          <li>4 uova</li>
          <li>1 bustina di lievito per dolci</li>
        </ul>
      </div>
      <h3>Per la farcitura</h3>
      <div>
        <ul>
          <li>300 g succo di limone</li>
          <li>50 g zucchero</li>
          <li>30 g amido di mais</li>
          <li>3 limoni (scorza)</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Tagliare il burro a cubetti e unirlo allo zucchero, lavorandoli con delle fruste elettriche fino ad ottenere una crema per circa 10 minuti. Unire le uova una per volta e, in seguito, la scorza dei limoni. Incorporare il succo e continuare a mescolare per amalgamare completamente il composto. Aggiungere la farina, la fecola di patate e il lievito setacciati. Versare l’impasto in uno stampo (imburrato e infarinato) da 28 cm di diametro e cuocere per circa 50 minuti in forno statico preriscaldato a 160 °C.
      </div>
      <div>
        In una pentola versare il succo di limone, la scorza grattuggiata, lo zucchero e l'amido di mais. Portare sul fuoco e mescolare continuamente per evitare la formazione di grumi. Dopo pochi minuti, il composto si addenserà: toglierlo dal fuoco e lasciarlo intiepidire. Infine, utilizzarlo per faricire la torta al limone tagliata in due.
      </div>
    </main>
  </body>
</html>
