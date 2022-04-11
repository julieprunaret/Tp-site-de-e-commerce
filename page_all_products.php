<?php
session_start();
require_once('include/head.php');
require_once('include/header.php');
require_once('include/all_products.php');


?>






        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach($resultatProduits as $value) {?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div >
                                <?php if($value['reservation_text'] == ""){  
                                ?>

                                <span class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">non réservé</span>

                                <?php } else { ?>
                                    <span class="badge bg-primary text-white position-absolute" style="top: 0.5rem; right: 0.5rem">réservé!</span>
                                <?php } ?>
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo strtoupper($value['title']); ?></h5>
                                    
                                    <!-- Product price-->
                                    $ <?php echo $value['price']; ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a href="consulter_un_produit.php?id_produit=<?php echo $value['id_produit']; ?>">Voir produit</a></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </section>




<?php
require_once('include/footer.php');

?>