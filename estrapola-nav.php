<?php
  $link = mysqli_connect("localhost", "root", "", "ricette");
  if (empty($_GET["file"])) {
    $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='index'");
    $nav[] = mysqli_fetch_assoc($query);
    echo json_encode($nav);
  } else {
    $file = $_GET["file"];
    $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='$file'");
    $nav[] = mysqli_fetch_assoc($query);
    $padre = $nav[0]["padre"];
    while ($padre!=="null") {
      $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='$padre'");
      array_unshift($nav, mysqli_fetch_assoc($query));
      $padre = $nav[0]["padre"];
    }
    echo json_encode($nav);
  }
?>
