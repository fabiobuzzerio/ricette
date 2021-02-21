<?php
  $link = mysqli_connect("localhost", "root", "", "ricette");
  $padre = $_GET["padre"];
  $titolo = mysqli_real_escape_string($link, $_GET["titolo"]);
  $file = str_replace(' ', '-', $titolo);
  $file = strtolower($file);
  $file = preg_replace('/[^A-Za-z0-9\-]/', '', $file);
  $emoji = strtolower($_GET["emoji"]);
  $ingredienti = explode("; ", $_GET["ingredienti"]);
  $query = mysqli_query($link, "INSERT INTO pagine (padre, titolo, file, emoji) VALUES ('$padre', '$titolo', '$file', '$emoji')");
  mysqli_close($link);
  $html = '<!DOCTYPE html>
            <html lang="it" dir="ltr">
              <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="style.css"/>
                <?php
                  $file = basename(__FILE__, \'.php\');
                  $link = mysqli_connect("localhost", "root", "", "ricette");
                  $query = mysqli_query($link, "SELECT * FROM pagine WHERE file=\'$file\'");
                  $pagina = mysqli_fetch_assoc($query);
                  echo \'<link rel="icon" href="emoji/svg/\'.$pagina["emoji"].\'.svg" id="emoji">
                        <title>\'.$pagina["titolo"].\'</title>\';
                ?>
              </head>
              <body>
                <main>
                  <h2>Ingredienti</h2>
                  <div>
                  <ul>';
    foreach ($ingredienti as $ingrediente) {
        $html .= "<li>".$ingrediente."</li>";
    }
    $html .= '</ul>
    </div>
    <h2>Procedimento</h2>
    <div>';
    $html .= $_GET["procedimento"];
    $html .= '</div>
    </main>
              <script type="text/javascript" src="main.js"></script>
            </body>
          </html>';
  echo $html;
  file_put_contents($file.'.php', $html);
  header("Location: $file.php");
  die();
?>
