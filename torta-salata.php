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
        <h3>Per l'impasto</h3>
        <ul>
          <li>500 g farina</li>
          <li>100 g olio evo</li>
          <li>100 ml vino bianco</li>
          <li>1 cucchiaino sale</li>
        </ul>
        <h3>Per il ripieno</h3>
        <ul>
          <li>500 g carne macinata</li>
          <li>150 g ricotta</li>
          <li>100 g formaggio fresco</li>
          <li>100 g pecorino</li>
          <li>4 uova</li>
          <li>2 cucchiai pan grattato</li>
          <li>2 cucchiai grana padano</li>
          <li>2 fette mortadella</li>
          <li>2 fette prosciutto cotto</li>
          <li>q.b cipolla</li>
          <li>q.b sale</li>
          <li>q.b olio evo</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Impastare la farina, l'olio, il vino e il sale. Lasciare riposare per mezz'ora. Cuocere la carne per qualche minuto, con un po' di cipolla tritata e del sale, fino a che non ci siano più zone crude. Lasciare raffreddare. Tritare finemente la mortadella e il prosciutto cotto, grattuggiare il grana padano ed il pecorino e tagliare a pezzi piccoli il formaggio fresco. Sbattere le uova e, in seguito, aggiungere la mortadella, il prosciutto cotto, tutti i formaggi e il pan grattato. Amalgamare fino a quando il composto risulterà omogeneo. Stendere l'impasto in due dischi uguali, più grandi della teglia da usare di circa 4 cm. Ungere al teglia con dell'olio e riporre il primo disco. Aggiungere l'impasto e chiudere con il disco di pasta. Unire i due strati con le dita. Per realizzare il merletto, tagliare il bordo con intervalli di un centimetro e abbassare i tasselli in maniera alternata (uno su, uno giù). Bucare la superficie con una forchetta. Infine, stendere dell'olio sulla superficie. Cuocere in forno statico preriscaldato a 180° per circa 40 min, fino a quando la superficie diventa dorata.
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
