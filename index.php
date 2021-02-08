<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="svg/1f468-1f3fb-200d-1f373.svg" id="emoji">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Ricette</title>
  </head>
  <body>
    <article>
      <div style="background-color: var(--hover); border-radius: 3px; padding: 10px 15px">
        <img src="svg/26a0.svg" width="16px"> Vuol dire che la ricetta non è stata provata.
      </div>
      <?php
        function caricaLink($categoria) {
          foreach (glob("$categoria.php") as $pagine) {
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
            echo '<div class="paragrafo">
              <a class="pagine-link" href="'.$url.'">
                <img src="'.$emoji.'">
                <span>'.$titolo.'</span>
              </a>
            </div>';
          }
        }
        $categorie = array('antipasti', 'primi', 'secondi', 'contorni', 'dolci', 'liquori');
        foreach ($categorie as $categoria) {
          caricaLink($categoria);
        }
      ?>
    </article>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
