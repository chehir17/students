<?php
include "dbconnexion.php";
    
    
    $req = $cnx->prepare("DELETE FROM students WHERE  id=:param_id ");
    $req->bindParam(":param_id",$_GET['id']);
    $req->execute();

    header('location:index.php');
     ?>
