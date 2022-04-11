<?php 
require_once('database/connexion.php');



if(!empty($_POST)){
	if(!empty($_POST['title_article']) && !empty($_POST['description_article']) && !empty($_POST['price_article']) && !empty($_POST['city_article']) && !empty($_POST['postCod_article'])){ 
		echo "tout les éléments sont rentrés";

		$title = htmlspecialchars($_POST['title_article']);
		$description = htmlspecialchars($_POST['description_article']);
        $price = htmlspecialchars($_POST['price_article']);
        $city = htmlspecialchars($_POST['city_article']);
        $codePostal = htmlspecialchars($_POST['postCod_article']);
        $message = "";
 		

 		$sqlInsert = "INSERT INTO `produit`(`id_produit`, `title`, `description`, `price`, `city`, `postal_code`, `reservation_text`) VALUES (NULL,'".$title."','".$description."','".$price."','".$city."','".$codePostal."', '".$message."')";

 		if(mysqli_query($connexion, $sqlInsert)){
 			echo "j'ai crée l\'article !";
 		}else{
 			echo "echec erreur sql";
 		}
	}
}