<?php

$login = $_POST['login'];
$pw = $_POST['password'];
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=bdmdw2.2', 'mdw2.2', 'mdw2.2');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "Bravo connexion etablie....!";
    $requete = "select * from comptes where login='$login' and pw='$pw'";
    $resultat = $conn->query($requete);
    if($resultat->rowcount()==0)
       header("location:erreur.html");
    else
    {
        session_start();
        $_SESSION['login']=$login;
        header("location:liste.php");
    }
}
catch(PDOException $e)
{
    echo "Erreur de connexion a la base de donnees...<br/>";
    echo $e->getMessage();
}











?>