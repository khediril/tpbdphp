<?php
require_once('include/protege.inc.php');     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
      include('include/error.inc.php');
    ?>
</head>
<body>
    
    <h3>Connected user :<?php echo $_SESSION['login'];  ?> </h3>
    <h1>Suppression d'in produit</h1>
    <?php
    $id = $_GET['id'];
  
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=bdmdw2.2', 'mdw2.2', 'mdw2.2');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "Bravo connexion etablie....!";
    $requete = "select * from produit where id=$id";
    
    $resultat = $conn->query($requete);
    // afficherProduit($resultat);
    $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
    echo "<br/>Ce produit va etre supprimee Si vous etes sur cliquer sur valider<br/>";
    echo "Id : ".$ligne['id']."<br/>";
    echo "Nom : ".$ligne['nom']."<br/>";
    echo "Description : ".$ligne['description']."<br/>";
    echo "Prix : ".$ligne['prix']."<br/>";
    echo '<form method="POST" action="validsupp.php">' ;
    echo '<input type="hidden" name="id" value="'.$id.'">' ;
    echo '<input type="submit" value="Valider">' ;
    echo '</form>'; 
} catch (PDOException $e) {
    echo "Erreur de connexion a la base de donnees...<br/>";
    echo $e->getMessage();
}



?>    
</body>
</html>