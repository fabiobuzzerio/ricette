<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="svg/1f35d.svg" id="emoji">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Primi</title>
  </head>
  <body>
    <article>
      <?php
        foreach (glob("primi/*.html") as $pagine) {
          $url = $pagine;
          $url_caricato = file_get_contents($url);
          $documento = new DOMDocument();
          libxml_use_internal_errors(TRUE);
          $documento->loadHTML($url_caricato);
          $xpath = new DOMXPath($documento);
          $query = $xpath->query('//title');
          $titolo = $query[0]->nodeValue;
          $query = $xpath->query('//link[@rel="icon"]');
          $emoji = $query[0]->getAttribute("href");
          $emoji = explode("../", $emoji)[1];
          echo '<div class="paragrafo">
            <a class="pagine-link" href="'.$url.'">
              <img src="'.$emoji.'">
              <span>'.$titolo.'</span>
            </a>
          </div>';
        }
      ?>
    </article>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>