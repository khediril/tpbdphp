<?php
session_start();
if(!isset($_SESSION['login']))
   header("location:login.html");
     

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
    <?php 
      include('include/nav.inc.php');

      if(isset($_GET['supp']) && $_GET['supp']== "ok")
      {
        echo "Suppression effectuee avec succes...";
      }
    ?>
    
      
    
    <?php   
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=bdmdw2.2', 'mdw2.2', 'mdw2.2');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  echo "Bravo connexion etablie....!";
    $requete = "select * from produit";
    $resultat = $conn->query($requete);
    echo "<h2>Liste des produits</h2>";
    echo '<table class="table table-success table-striped"> <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Description</th>
      <th scope="col">Detail</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
      <th scope="col">Image</th>
      
    </tr>
  </thead>
  <tbody>';
   // while(($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) !== false)
   $resultat->setFetchMode(PDO::FETCH_ASSOC);
   $tab = $resultat->fetchAll();
   foreach ($tab as $ligne) 
   {
       echo "<tr>";

        echo "<th scope='row'>".$ligne['id']."</td>";
        echo "<td>".$ligne['nom']."</td>";
        echo "<td>".$ligne['prix']."</td>";
        echo "<td>".$ligne['description']."</td>";
        echo '<td><a class="btn btn-primary" href="detail.php" role="button">Detail</a>
        </td>';
        echo '<td><a class="btn btn-primary" href="modifier.php" role="button">Modifier</a>
        </td>';
        $lien  = 'supprimer.php?id='.$ligne["id"];
        echo '<td><a class="btn btn-danger" href="'.$lien.'" role="button">Supprimer</a>
        </td>';
        $photo = $ligne['photo'];
        echo "<td><img src='images/$photo'></td>";
        
              
       echo "</tr>";

    }
    echo "</tbody></table>";


    

    
}
catch(PDOException $e)
{
    echo "Erreur de connexion a la base de donnees...<br/>";
    echo $e->getMessage();
}
?>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>