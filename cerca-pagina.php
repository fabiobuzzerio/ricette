<?php
  if (!empty($_GET["stringa"])) {
    $link = mysqli_connect("localhost", "root", "", "ricette");
    $stringa = $_GET["stringa"];
    $query = mysqli_query($link, "SELECT * FROM pagine WHERE titolo LIKE '%$stringa%'") or die(mysqli_error($link));
    if ($query) {
      while ($pagina = mysqli_fetch_assoc($query)) {
        $risultati[] = $pagina;
      }
      echo json_encode($risultati);
    }
    mysqli_close($link);
  }
?>
