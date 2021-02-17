<?php
  if (!empty($_GET["nomeFileVecchio"])) {
    $nomeFileVecchio = $_GET["nomeFileVecchio"];
  }
  if (!empty($_GET["nomeFileNuovo"])) {
    $nomeFileNuovo = $_GET["nomeFileNuovo"];
  }
  if (!empty($_GET["nome"])) {
    $nome = $_GET["nome"];
  }
  if (!empty($_GET["emoji"])) {
    $emoji = $_GET["emoji"];
  }
  rename("$nomeFileVecchio.php", "$nomeFileNuovo.php");
  $link = mysqli_connect("localhost", "root", "", "ricette");
  $query = mysqli_query($link, "UPDATE pagine SET nomeFile='$nomeFileNuovo', nome='$nome', emoji='$emoji' WHERE nomeFile='$nomeFileVecchio'");
  header("Location: $nomeFileNuovo.php");
  die();
?>
