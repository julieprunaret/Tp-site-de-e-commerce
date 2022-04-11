<?php 
require_once('database/connexion.php');
require_once('./consulter_un_produit.php');



if(!empty($_POST)){
	if(!empty($_POST['message_article'])){ 
		echo "tout les éléments sont rentrés";


        $message = htmlspecialchars($_POST['message_article']);
 		
		$updateReservation = "UPDATE `produit` SET `reservation_text` = '.$message.' WHERE `produit`.`id_produit` = ".$_GET['id_produit']." ";

 		if(mysqli_query($connexion, $updateReservation)){
 			echo "j'ai crée l\'article !";
 		}else{
 			echo "echec erreur sql";
 		}
	}
}

