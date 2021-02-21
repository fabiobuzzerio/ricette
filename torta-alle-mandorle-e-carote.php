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
          <li>380 g carote</li>
          <li>300 g farina</li>
          <li>200 g zucchero</li>
          <li>110 g burro</li>
          <li>100 g mandorle</li>
          <li>50 g fecola di patate (o maizena)</li>
          <li>4 uova</li>
          <li>1 bustina di lievito per dolci</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Lavare e pelare le carote, grattugiarle finemente e tenerle da parte. Bollire dell’acqua in un pentolino e ammorbidire le mandorle a fuoco spento per circa 1-2 minuti: sbucciarle e tritarle finemente. Montare le uova intere con lo zucchero per circa 10 minuti, in modo da ottenere un composto chiaro e spumoso. Aggiungere il burro. Incorporare la farina e il lievito setacciati poco alla volta in modo da amalgamarli per bene. Unire le carote grattugiate e le mandorle tritate. Versare l’impasto in uno stampo (imburrato e infarinato) da 28 cm di diametro e cuocere per circa 45 minuti in forno statico preriscaldato a 170 °C.
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
