<!--START HEAD & HEADER.
------------------------------------------------------------>
    <?php session_start();?>
    <?php include "templates/head.php"; ?>
	<?php include "templates/header.php"; ?>

<!--END HEAD & HEADER.
------------------------------------------------------------>



<!--START BODY.
------------------------------------------------------------>
<main>
    <div class="container container-shoppingCart">
        <?php include "templates/headerShoppingcart.php"; ?>
    </div>
    <div class="container container-shoppingCart">
        <?php //include "templates/bodyShoppingcart.php"; ?>
        <?php include "shopping-cart.php"; ?>

        <section class="container-cart container-cart-body">
            <article class="wrapper-cart wrapper-cart-body">
                <section class="cart cart-body cart-body-header">
                    <p class="table table1">product_imgurl</p>
                    <p class="table table2">product_description</p>
                    <p class="table table3">product_price</p>
                    <p class="table table4">product_qty</p>
                    <p class="table table5">product_total</p>
                    <p class="table table6">remove item</p>
                </section>
                <section class="cart cart-body cart-body-items">
                    <p class="table table-shop table1"><img class="product_img" src="img/hp01.png" alt="products"/></p>
                    <p class="table table-shop table2">description</p>
                    <p class="table table-shop table3">price</p>
                    <p class="table table-shop table4">qty</p>
                    <p class="table table-shop table5">total</p>
                    <p class="table table-shop table6">remove item</p>
                </section>
                <section class="cart cart-body cart-body-summary">
                    <p class="table table7">whitespace</p>
                    <p class="table table9">total price:</p>
                    <p class="table table10">calculated price</p>
                </section>
                <section class="cart cart-body cart-body-summary">
                    <h6>whitespace</h6>
                </section>
            </article>
        </section>
 
    </div>
</main>

<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
    <?php include "templates/footer.php"; ?>

<!--END FOOTER.
------------------------------------------------------------>