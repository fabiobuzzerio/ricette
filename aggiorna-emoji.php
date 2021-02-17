<?php
  $file = $_GET["file"];
  $emoji = $_GET["emoji"];
  $link = mysqli_connect("localhost", "root", "", "ricette");
  $query = mysqli_query($link, "UPDATE pagine SET emoji='$emoji' WHERE file='$file'");
  if ($query) {
    echo "ok";
  }
  mysqli_close($link);
?>
