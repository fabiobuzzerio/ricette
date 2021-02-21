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
          <li>
            brodo
            <ul>
              <li>acqua</li>
              <li>biancostato</li>
              <li>gallina</li>
              <li>muscolo</li>
              <li>carote</li>
              <li>cipolla</li>
              <li>sedano</li>
              <li>pomodorini</li>
            </ul>
          </li>
          <li>
            polpette
            <li>carne macinata</li>
            <li>uova</li>
            <li>pan grattato</li>
            <li>grana padano</li>
            <li>prezzemolo</li>
            <li>olio evo</li>
          </li>
          <li>ravioli</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        <div>
          Per il brodo. In una pentola molto alta riporre tutta la carne e ricoprirla d'acqua. Portare a ebolizzione e, prima del bollore, schiumare. In seguito, aggiungere il sedano, la cipolla, la carota e i pomodorini. Cuocere  per almeno 3 ore. A metà cottura aggiungere circa un cucchiaio di ...
        </div>
        <div>
          Per le polpettine, unire la carne, le uova, il pan grattato, il grana padano e il prezzemolo, in modo da ottenere un composto omogeneo. Fare le polpettine.
        </div>
        <div>
          In una pentola versare il brodo e portare a ebolizzione. A questo punto, aggiungere le polpettine e cuocere per cinque minuti. Infine, aggiungere i tortellini e cuocere secondo le indicazioni della confezione.
        </div>
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>

  </body>
</html>
