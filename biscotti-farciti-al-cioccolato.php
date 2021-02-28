<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
      $file = basename(__FILE__, '.php');
      $link = mysqli_connect("localhost", "root", "", "ricette");
      $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='$file'");
      $pagina = mysqli_fetch_assoc($query);
      echo '<title>'.$pagina["titolo"].'</title>
            <link rel="icon" href="emoji/svg/'.$pagina["emoji"].'.svg" id="emoji">';
      mysqli_close($link);
    ?>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="main.js" defer></script>
  </head>
  <body>
    <main>
      <h2>Ingredienti</h2>
      <div>
        <ul>
          <li>400 g farina</li>
          <li>200 g cioccolato al latte</li>
          <li>100 g burro</li>
          <li>100 g zucchero a velo</li>
          <li>2 uova</li>
          <li>1 bustina vaniglia</li>
          <li>½ bicchiere latte</li>
          <li>¼ olio</li>
          <li>q.b sale</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Impastare la farina con il latte, poi unire il burro fuso e una perina (?) di sale. Fare un panetto e lasciarlo riposare per due ore al fresco. Ora stendere con il mattarello la pasta in una sfoglia piuttosto sottile e con un bicchiere ricavare tanti dischetti. Friggerli e passarli su un foglio di carta assorbente per togliere l'unto. Sciogliere il cioccolato a fuoco teneue mescolando con una spatola, spalmare un dischetto fritto con del cioccolato e ricoprire con un altro dischetto fritto. Disporre i dischetti su un piatto e spolverizzarli con lo zucchero a velo al quale è stata aggiunta la vaniglia.
      </div>
    </main>
  </body>
</html>
