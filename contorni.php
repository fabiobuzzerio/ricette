<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <?php
      $file = basename(__FILE__, '.php');
      $link = mysqli_connect("localhost", "root", "", "ricette");
      $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='$file'");
      $pagina = mysqli_fetch_assoc($query);
      echo '<link rel="icon" href="emoji/svg/'.$pagina["emoji"].'.svg" id="emoji">
            <title>'.$pagina["titolo"].'</title>';
    ?>
  </head>
  <body>
    <main>
      <?php
      $query = mysqli_query($link, "SELECT * FROM pagine WHERE padre='$file'");
      while ($ricetta = mysqli_fetch_assoc($query)) {
        echo '<div class="paragrafo">
          <a class="pagineLink" href="'.$ricetta['file'].'">
            <img src="emoji/svg/'.$ricetta['emoji'].'.svg">
            <span>'.$ricetta['titolo'].'</span>
          </a>
        </div>';
      }
      mysqli_close($link);
      ?>
    </main>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
