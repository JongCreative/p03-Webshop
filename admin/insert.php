<!--START HEAD & HEADER.
------------------------------------------------------------>
<?php include "templates/head.php"; ?>
<Section class="bg-gradient">

<!--END HEAD & HEADER.
------------------------------------------------------------>



<!--START BODY.
------------------------------------------------------------>
<h2>PRODUCT INSERT</h2>
<article class="container-products3">
  <form class="wrapper-products3" action="templates/formHandlerInsert.php" method="POST">
    <fieldset class="form-top"> 
      <section class="form-left">
        <label for="product_model">product_model</label>              <br/><input type="text" name="product_model" id="product_model"><br/>
        <label for="product_brand">product_brand</label>              <br/><input type="text" name="product_brand" id="product_brand"><br/>
        <label for="product_color">product_color</label>              <br/><input type="text" name="product_color" id="product_color"><br/>
        <label for="product_weight">product_weight</label>            <br/><input type="text" name="product_weight" id="product_weight"><br/>
        <label for="product_batterylife">product_batterylife</label>  <br/><input type="text" name="product_batterylife" id="product_batterylife"><br/>
        <label for="product_price">product_price</label>              <br/><input type="text" name="product_price" id="product_price"><br/>
        <label for="product_description">product_description</label>  <br/><input type="text" name="product_description" id="product_description"><br/>
      </section>
      <section class="form-right">
        <label for="product_img_urla_tilted">img_urla_tilted</label>   <br/><input type="text" name="product_img_urla_tilted" id="product_img_urla_tilted"><br/>
        <label for="product_img_urlb_front">img_urlb_front</label>     <br/><input type="text" name="product_img_urlb_front" id="product_img_urlb_front"><br/>
        <label for="product_img_urlc_bottom">img_urlc_bottom</label>   <br/><input type="text" name="product_img_urlc_bottom" id="product_img_urlc_bottom"><br/>
        <label for="product_img_urld_side">img_urld_side</label>       <br/><input type="text" name="product_img_urld_side" id="product_img_urld_side"><br/>
        <label for="product_img_urle_detailed">img_urle_detail</label> <br/><input type="text" name="product_img_urle_detailed" id="product_img_urle_detailed"><br/>
      </section>
    </fieldset>
    <fieldset class="form-bottom">
      <button class="btn" type="submit"><h3>submit!</h3></button>
    </fieldset>
  </form>
</article>

<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
<?php include "../public/templates/footer.php"; ?>

<!--END FOOTER.
------------------------------------------------------------>