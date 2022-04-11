<?php 
session_start();
require_once('include/head.php');
require_once('include/header.php');
require_once('database/connexion.php');
require_once('include/article_reservation&update_traitement.php');
require_once('include/article_form_traitement.php');

//affiche mon unique produit
$selectProduitByGet = "SELECT * FROM produit WHERE id_produit = '".$_GET['id_produit']."'";
$tableProduitByGet = mysqli_query($connexion, $selectProduitByGet);
$resultat = mysqli_fetch_all($tableProduitByGet, MYSQLI_ASSOC);



?>



    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            <!-- <img class="card-img-top" src="../panel/uploads/<//?php echo $key_allarticles['image_article']; ?>" alt="..." /> -->
                     <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder"><?php echo $resultat[0]['title']; ?></h5>
                    <div>Prix : <?php echo $resultat[0]['price']; ?>$</div>
                    <div>Ville : <?php echo $resultat[0]['city']; ?></div>
                    <div>Code Postal : <?php echo $resultat[0]['postal_code']; ?></div>
                    <!-- Product price-->
                    <p><?php echo $resultat[0]['description']; ?></p>
                    </div>
                </div>
            <!-- reservations-->
            <?php if($resultat[0]['reservation_text'] == ""){  ?>

                <span style="color: red;">non réservé</span>

                    <form method="post">
                        <div class="input-group">
                            <label for="inputDescription" class="form-label">entrez un message pour réserver</label>
                            <textarea type="text" class="form-control" name="message_article" required></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="update_product" value="Je réserve">
                    </form>
                    <?php } else { 
                        
                        echo $resultat[0]['reservation_text'];

                        ?>
                <span style="color: green;">réservé !</span>

            <?php } ?>

        </div>
    </div>







<?php 
require_once('include/footer.php');
?>