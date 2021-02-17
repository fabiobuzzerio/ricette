<?php
  $titolo = $_GET["titolo"];
  $vecchioFile = $_GET["file"];
  $link = mysqli_connect("localhost", "root", "", "ricette");
  if ($vecchioFile == "index") {
    $query = mysqli_query($link, "UPDATE pagine SET titolo='$titolo' WHERE file='$vecchioFile'");
    mysqli_close($link);
  } else {
    $nuovoFile = str_replace(' ', '-', $_GET["titolo"]);
    $nuovoFile = strtolower($nuovoFile);
    $nuovoFile = preg_replace('/[^A-Za-z0-9\-]/', '', $nuovoFile);
    $query = mysqli_query($link, "UPDATE pagine SET titolo='$titolo', file='$nuovoFile' WHERE file='$vecchioFile'");
    $query = mysqli_query($link, "UPDATE pagine SET padre='$nuovoFile' WHERE padre='$vecchioFile'");
    mysqli_close($link);
    rename("$vecchioFile.php", "$nuovoFile.php");
    echo $nuovoFile;
  }
?>
