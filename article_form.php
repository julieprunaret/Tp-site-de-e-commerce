<?php
session_start();
require_once('include/head.php');
require_once('include/header.php');
require_once('include/article_form_traitement.php');

?>


<!---------------------------------------------------------
        
    formulaire de création 

 ------------------------------------------------------------>

 <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row justify-content-center">
                    <form method="POST"   class="row g-3 col-lg-6 col-md-9 col-sm-10">
                        <div class="col-md-6">
                            <label for="inputTitle" class="form-label">Titre de l'artice</label>
                            <input type="text" class="form-control" name="title_article" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputDescription" class="form-label">Description de votre article</label>
                            <input type="text" class="form-control" name="description_article" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputTitle" class="form-label">Prix</label>
                            <input type="number" class="form-control" name="price_article" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputDescription" class="form-label">Ville</label>
                            <input type="text" class="form-control" name="city_article" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputTitle" class="form-label">Code Postal</label>
                            <input type="number" class="form-control" name="postCod_article" required>
                        </div>
                        <!-- <div class="col-md-6">
                            <label for="inputTitle" class="form-label">Vous désirez réserver? laissez un message !</label>
                            <input type="text" class="form-control" name="message_article" required>
                        </div> -->
                        <div class="col-12">
                            <input class="btn btn-primary" type="submit" name="envoie_form_article" value="Ajouter l'article" required>
                        </div>
                    </form>
                </div>
            </div>
        </section>












<?php 

require_once('include/footer.php'); 

?>