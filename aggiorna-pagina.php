<?php
  $link = mysqli_connect("localhost", "root", "", "ricette");
  if (!empty($_GET["titolo"])) {
    $vecchioFile = $_GET["file"];
    $titolo = mysqli_real_escape_string($link, $_GET["titolo"]);
    if ($vecchioFile == "index") {
      $query = mysqli_query($link, "UPDATE pagine SET titolo='$titolo' WHERE file='$vecchioFile'") or die(mysqli_error($link));
      mysqli_close($link);
    } else {
      $nuovoFile = preg_replace('/[^A-Za-z0-9\-]/', '-', strtolower($_GET["titolo"]));
      $nuovoFileArray = explode("-", $nuovoFile);
      $nuovoFileFinale = "";
      for ($i=0; $i < count($nuovoFileArray) ; $i++) {
        if (!empty($nuovoFileArray[$i])) {
          $nuovoFileFinale .= $nuovoFileArray[$i];
          $nuovoFileFinale .= "-";
        }
      }
      if (substr($nuovoFileFinale, -1) == "-") {
        $nuovoFileFinale = substr($nuovoFileFinale, 0, -1);
      }
      $query = mysqli_query($link, "UPDATE pagine SET titolo='$titolo', file='$nuovoFileFinale' WHERE file='$vecchioFile'") or die(mysqli_error($link));
      if ($query) {
        $query = mysqli_query($link, "SELECT * FROM pagine WHERE padre='$vecchioFile'") or die(mysqli_error($link));
        if (mysqli_num_rows($query) > 0) {
          while ($pagina = mysqli_fetch_assoc($query)) {
            $titoloPagina = $pagina["titolo"];
            $query = mysqli_query($link, "UPDATE pagine SET padre='$nuovoFileFinale' WHERE titolo='$titoloPagina'") or die(mysqli_error($link));
          }
        }
        mysqli_close($link);
        rename("$vecchioFile.php", "$nuovoFileFinale.php");
        echo $nuovoFileFinale;
      }
    }
  }
  if (!empty($_GET["emoji"])) {
    $file = $_GET["file"];
    $emoji = $_GET["emoji"];
    $query = mysqli_query($link, "UPDATE pagine SET emoji='$emoji' WHERE file='$file'") or die(mysqli_error($link));
    mysqli_close($link);
    echo true;
  }
?>
