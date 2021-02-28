<?php
  $link = mysqli_connect("localhost", "root", "", "ricette");
  // aggiornamento titolo e file
  if (!empty($_GET["titolo"])) {
    $vecchioFile = $_GET["file"];
    $titolo = mysqli_real_escape_string($link, $_GET["titolo"]);
    // aggiornamento index (solo titolo)
    if ($vecchioFile == "index") {
      $query = mysqli_query($link, "UPDATE pagine SET titolo='$titolo' WHERE file='$vecchioFile'") or die(mysqli_error($link));
      mysqli_close($link);
    } else {
      // aggiornamento qualsiasi altra pagina (titolo e file)
      // generazione nome file da titolo
      $nuovoFile = preg_replace('/[^A-Za-z0-9\-]/', '-', strtolower($_GET["titolo"]));
      $nuovoFileArray = explode("-", $nuovoFile);
      $nuovoFileFinale = "";
      for ($i=0; $i < count($nuovoFileArray) ; $i++) {
        if (!empty($nuovoFileArray[$i])) {
          $nuovoFileFinale .= $nuovoFileArray[$i];
          $nuovoFileFinale .= "-";
        }
      }
      // rimozione - finale
      if (substr($nuovoFileFinale, -1) == "-") {
        $nuovoFileFinale = substr($nuovoFileFinale, 0, -1);
      }
      // aggiornamento riga del file
      $query = mysqli_query($link, "UPDATE pagine SET titolo='$titolo', file='$nuovoFileFinale' WHERE file='$vecchioFile'") or die(mysqli_error($link));
      if ($query) {
        // aggiornamento padre di altre pagine
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
  // aggiornamento emoji
  if (!empty($_GET["emoji"])) {
    $file = $_GET["file"];
    $emoji = $_GET["emoji"];
    $query = mysqli_query($link, "UPDATE pagine SET emoji='$emoji' WHERE file='$file'") or die(mysqli_error($link));
    mysqli_close($link);
    echo true;
  }
?>
