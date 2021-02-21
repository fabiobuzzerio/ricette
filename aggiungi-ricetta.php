<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="icon" href="emoji/svg/2728.svg">
    <title>Aggiungi ricetta</title>';
  </head>
  <body>
    <nav>
      <div>
        <a href="/">
          <img src="emoji/svg/1f468-1f3fb-200d-1f373.svg">
          <span>Ricette</span>
        </a>
      </div>
    </nav>
    <main>
      <form id="aggiungiRicetta" action="crea-ricetta.php" method="get">
        <h3>Nome ricetta</h3>
        <input type="text" name="titolo" placeholder="Torta all'arancia" required>
        <h3>Categoria</h3>
        <select name="padre" required>
          <?php
            $link = mysqli_connect("localhost", "root", "", "ricette");
            $query = mysqli_query($link, "SELECT * FROM categorie");
              while ($categoria = mysqli_fetch_assoc($query)) {
                echo '<option value="'.$categoria["file"].'">'.ucfirst($categoria["file"]).'</option>';
            }
            mysqli_close($link);
          ?>
        </select>
        <h3>Emoji</h3>
        <input type="text" name="emoji" placeholder="1f34a" required>
        <h3>Ingredienti</h3>
        <label for="procedimento"></label>
        <textarea name="ingredienti" placeholder="Inserisci ogni ingrediente separandoli con '; ' (un punto e virgola e uno spazio)." required></textarea>
        <h3>Procedimento</h3>
        <textarea name="procedimento" placeholder="Inserisci le istruzioni per preparare la ricetta." required></textarea>
        <input type="submit" value="Crea">
      </form>
    </main>
    <script type="text/javascript">
      h1 = document.createElement("h1");
      h1.innerHTML = document.title;
      document.querySelector("main").prepend(h1);
      h1Emoji = document.createElement("img");
      h1Emoji.id = "h1Emoji";
      h1Emoji.src = document.querySelector("link[rel=icon]").href;
      document.querySelector("main").prepend(h1Emoji);
    </script>
  </body>
</html>
