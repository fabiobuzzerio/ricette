<?php
  $link = mysqli_connect("localhost", "root", "", "ricette");
  if (!empty($_GET)) {
    $file = $_GET["file"];
    // categorie per disabilirare cancellazione
    $query = mysqli_query($link, "SELECT * FROM categorie");
      while ($categoria = mysqli_fetch_assoc($query)) {
        $categorie[] = $categoria["file"];
    }
    $categorie[] = "index";
    // controllo se file GET è una categoria
    if (!in_array($file, $categorie, true)) {
      // cancellazione pagina
      $query = mysqli_query($link, "DELETE FROM pagine WHERE file='$file'") or die(mysqli_error($link));
      if ($query) {
        unlink("$file.php");
        echo true;
      }
    } else {
      echo false;
    }
  } else {
    echo false;
  }
  mysqli_close($link);
?>
