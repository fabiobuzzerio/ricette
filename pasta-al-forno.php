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
          <li>
            condimenti
            <ul>
              <li>grana padano</li>
              <li>mozzarella</li>
              <li>mortadella</li>
              <li>prosciutto cotto</li>
            </ul>
          </li>
          <li>pasta</li>
          <li>
            polpette
            <ul>
              <li>carne macinata</li>
              <li>olio evo</li>
              <li>pan grattato</li>
              <li>prezzemolo</li>

              <li>sale</li>
              <li>uova</li>
            </ul>
          </li>
          <li>
            sugo
            <ul>
              <li>carne per spezzatino</li>
              <li>salsa di pomodoro</li>
            </ul>
          </li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Per le polpettine, unire la carne, le uova, il pan grattato, il grana padano e il prezzemolo, in modo da ottenere un composto omogeneo. Fare le polpettine e friggerle.
      </div>
      <div>
        Per il sugo, cuocere la carne nella salsa di pomodoro.
      </div>
      <div>
        Cuocere la pasta fino a metà del tempo indicato e, appena colata, unire un mestolo di sugo.
      </div>
      <div>
        In una teglia, riporre del sugo e poi, procedendo per strati, mettere la pasta, il sugo, la mozzarella, le polpettine, il grana padano grattuggiato, la mortadella e il prosciutto cotto (a straccetti). Finire la supercifie con sugo e formaggio. Cuocere in forno statico preriscaldato a 180° per circa mezz'ora.
      </div>
    </main>
  </body>
</html>
