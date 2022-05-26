<?php
require_once('include/protege.inc.php');     

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Ajout</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
      
 
  <?php
      include('include/nav.inc.php');
      

    
   echo "<h2>Ajout Nouveau produit</h2>";
    
    $form = <<<FORM
    <form action="formajout.php" method="get">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom du produit</label>
    <input type="text" class="form-control" id="nom"  name="nom">
   
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">Prix</label>
    <input type="text" class="form-control" id="prix" name="prix">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
</form>
FORM;
     if(!isset($_GET['submit'])) 
             echo $form;
          else 
          {
            $nom = $_GET['nom'];
            $prix = $_GET['prix'];
            $description = $_GET['description'];
          
            try {
                $conn = new PDO('mysql:host=127.0.0.1;dbname=bdmdw2.2', 'mdw2.2', 'mdw2.2');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $req = "insert into produit values(null,'$nom',$prix,'$description')";
                //echo $req;
               // exit();
                $resultat = $conn->exec($req);
                
                echo '<div class="alert alert-success" role="alert">Produit ajoute avec succes...</div>';
            }
            catch(PDOException $e)
            {
              echo "ERREUR :".$e->getMessage();
            }
          
          }





?>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>