<?php
  $file = basename(__FILE__, '.php');
  $link = mysqli_connect("localhost", "root", "", "ricette");
  $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='$file'");
  $pagina = mysqli_fetch_assoc($query);
  echo '<link rel="icon" href="svg/'.$pagina["emoji"].'.svg" id="emoji">
        <title>'.$pagina["titolo"].'</title>';
mysqli_close($link);
?>
