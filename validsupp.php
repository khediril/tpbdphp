<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $id = $_POST['id'];
      // echo $id;
       try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=bdmdw2.2', 'mdw2.2', 'mdw2.2');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  echo "Bravo connexion etablie....!";
        $requete = "delete from produit where id=$id";
        
        $nb = $conn->exec($requete);
             // echo "<br/>Suppression du produit $id effectuee avec succes..."; 
        header("location:liste.php?supp=ok"); 

    } catch (PDOException $e) {
        echo "Erreur de connexion a la base de donnees...<br/>";
        echo $e->getMessage();
    }

?>
    
</body>
</html>