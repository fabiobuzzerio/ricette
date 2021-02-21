<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <?php
      $file = basename(__FILE__, '.php');
      $link = mysqli_connect("localhost", "root", "", "ricette");
      $query = mysqli_query($link, "SELECT * FROM pagine WHERE file='$file'");
      $pagina = mysqli_fetch_assoc($query);
      echo '<link rel="icon" href="emoji/svg/'.$pagina["emoji"].'.svg" id="emoji">
            <title>'.$pagina["titolo"].'</title>';
mysqli_close($link);
    ?>
  </head>
  <body>
    <main>
      <h2>Ingredienti</h2>
      <div>
        <ul>
          <li>250 g farina</li>
          <li>150 g canditi misti</li>
          <li>100 g zucchero</li>
          <li>100 g burro</li>
          <li>50 g uvetta sultanina</li>
          <li>2 uova</li>
          <li>1 bustina di lievito</li>
          <li>1 bicchiere di latte</li>
          <li>q.b pan grattato</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Porre l'uvetta a bagnomaria in acqua tiepida per farla ammorbidire, rompere i due tuorli in una terrina, incorporare lo zucchero e montarli finché saranno divetati spumosi. Unire poco alla volta la farina. A un certo punto il composto diventerà troppo duro: diluire allora con un po' di latte. Continuare a mescolare finché tutta la farina sarà stata incorporata (meno un cucchiaio). Alla fine aggiungere il rimanente latte, 80 g di burro fuso e il lievito in polvere. Amalgamare bene tutti gli ingredienti. Togliere a (?) tutti i canditi, unire l'uvetta sgocciolata dall'acqua e asciugata, e svolverare con la farina rimasta: questo accorgimento eviterà ai canditi di precipitare tutti sul fondo del plum-cake durante la cottura. Incorporarli al composto. Imburrare uno stampo rettangolare da plum-cake, spolverarlo di pangrattato, scuoterlo per togliere l'eccesso, poi versarvi il composto e porlo in forno per circa un'ora a calore moderato.
      </div>
    </main>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
