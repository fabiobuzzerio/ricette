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
      echo '<link rel="icon" href="svg/'.$pagina["emoji"].'.svg" id="emoji">
            <title>'.$pagina["titolo"].'</title>';
mysqli_close($link);
    ?>
  </head>
  <body>
    <article>
      <h2>Ingredienti</h2>
      <div>
        <ul>
          <li>500 ml latte</li>
          <li>300 g biscotti savoiardi</li>
          <li>250 g burro</li>
          <li>250 g zucchero</li>
          <li>1 pacchetto di budino alla vaniglia</li>
          <li>1 grossa scatola di ananas</li>
          <li>q.b rhum</li>
        </ul>
      </div>
      <h2>Procedimento</h2>
      <div>
        Fare il budino con il latte (senza zucchero) e lasciare che si raffreddi mescolando ogni tanto per evitare che si formi una pellicina sopra. Sciogliere lo zucchero con il sugo dell'ananas e porlo sul fuoco a calore moderato e quando si sarà raffreddato mettere anche il burro (che deve essere lasciato fuori dal frigo dal giorno precedente) e poi il budino. Mescolare continuamente per ottenere una gustosissima crema. Prendere la forma di un dolce, mettere i biscotti aattorno e nel fondo della forma precedentemente bagnati con un po' di rhum mescolato a dell'acqua. Quindi mettere la crema e un po' di strato di ananas che sono stati precedentemente tagliati a pezzettini. Continuare così fino all'esaurimento degli ingredienti. Prima di servire può essere guarnito con panna montata.
      </div>
    </article>
    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
