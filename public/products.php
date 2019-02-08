<!--START HEAD & HEADER.
------------------------------------------------------------>
    <?php session_start(); ?>
    <?php include "templates/head.php"; ?>
	<?php include "templates/header.php"; ?>

<!--END HEAD & HEADER.
------------------------------------------------------------>



<!--START BODY.
------------------------------------------------------------>
<main>
    <div class="containerX container-product-filter">
        <?php include "templates/products-filters.php"; ?>
    </div>
    <div class="container-filterCards">
        <?php include "templates/productCard.php";?>    
        <?php //include "templates/pages.php";?>
<!--     
        <article class="filterCard wrapper-filterCard wrapper-filtercard-bose">
            <section class="productCart productCart-header">
                <a class="productCart-imgLink"><img class="productCart-imgLink productCard-img" src="img/B&O01-e.jpg" alt="B&O01-e"/></a>
            </section>
            <section class="productCart productCart-body">
                <h3>product_brand product_model</h3>
                <p>color: product_color<br/> product_description</p>
            </section>
            <section class="productCart productCart-footer">
                <form class="productCart-footer-form" method="GET" action="cartHandler.php">
                    <section class="productCart-footer-form-row">
                        <input type="hidden" name="hidden_line" value="<?php echo$hidden_output?>">
                        <input type="number" name="product_quantity" min="1" max="10">
                    </section>
                    <section class="productCart-footer-form-row">
                        <button class="btn5 productCart-form-right" type="submit"><h3>add</h3></button>
                    </section>
                </form>
            </section>
        </article> -->
    </div>
</main>

<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
<script src="js/products-filter.js"></script>
    <?php include "templates/footer.php"; ?>

<!--END FOOTER.
------------------------------------------------------------>