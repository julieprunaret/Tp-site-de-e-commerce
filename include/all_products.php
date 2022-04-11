<?php

require_once('database/connexion.php');


//sans limite d'affichage : 
$sqlSelect = "SELECT * FROM `produit` ORDER BY `id_produit` DESC";
$tableProduits = mysqli_query($connexion, $sqlSelect);
$resultatProduits = mysqli_fetch_all($tableProduits, MYSQLI_ASSOC);


//limite d'affichage aux 15 derniers articles  : 
$sqlSelect15 = "SELECT * FROM `produit` ORDER BY `id_produit` DESC LIMIT 15";
$tableProduits15 = mysqli_query($connexion, $sqlSelect15);
$resultatProduits15 = mysqli_fetch_all($tableProduits15, MYSQLI_ASSOC);

