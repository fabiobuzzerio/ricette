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
      echo '<link rel="icon" href="emoji/svg/'.$pagina["emoji"].'.svg">
            <title>'.$pagina["titolo"].'</title>';
    ?>
  </head>
  <body>
    <main>
      <div style="background-color: rgba(var(--hover)); border-radius: 5px; padding: 10px 15px; display: flex; flex-direction: row;">
        <img src="emoji/svg/26a0.svg" width="16px" style="margin-right: 8px;"> Vuol dire che la ricetta non è stata provata.
      </div>
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
