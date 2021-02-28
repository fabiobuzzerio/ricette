<?php
  $link = mysqli_connect("localhost", "root", "", "ricette");
  $padre = $_GET["padre"];
  $titolo = $_GET["titolo"];
  $file = preg_replace('/[^A-Za-z0-9\-]/', '-', strtolower($_GET["titolo"]));
  $fileArray = explode("-", $file);
  $file = "";
  for ($i=0; $i < count($fileArray) ; $i++) {
    if (!empty($fileArray[$i])) {
      $file .= $fileArray[$i];
      $file .= "-";
    }
  }
  // rimozione - finale
  if (substr($file, -1) == "-") {
    $file = substr($file, 0, -1);
  }
  $emoji = "26a0";
  $query = mysqli_query($link, "INSERT INTO pagine (padre, titolo, file, emoji) VALUES ('$padre', '$titolo', '$file', '$emoji')");
  mysqli_close($link);
  $ingredienti = explode("; ", $_GET["ingredienti"]);
  $html = '
<!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <script type="text/javascript" src="main.js" defer></script>
  </head>
  <body>
    <main>
      <h2>Ingredienti</h2>
      <div>
        <ul>';
  foreach ($ingredienti as $ingrediente) {
    $html .= "<li>".$ingrediente."</li>";
  }
  $html .= '
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>';
  $html .= $_GET["procedimento"];
  $html .= '
      </div>
    </main>
  </body>
</html>';
  echo $html;
  file_put_contents($file.'.php', $html);
  header("Location: $file.php");
  die();
?>
