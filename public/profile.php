<!--START HEAD & HEADER.
------------------------------------------------------------>
  <?php session_start(); ?>
  <?php include "templates/head.php"; ?>
	<?php include "templates/header.php"; ?>

<!--END HEAD & HEADER.
------------------------------------------------------------>



<!--START POP-UP REGISTER.
------------------------------------------------------------>
<article class="container container-form">
  <section class="wrapper wrapper-form1">
    <h2>Register form</h2>
    <form class="form-register" action="templates/formHandlerRegister.php" method="POST">
      <label for="user_password">Password</label>     <input type="password" name="user_password" id="user_password">
      <label for="user_firstname">First Name</label>  <input type="text" name="user_firstname" id="user_firstname">
      <label for="user_lastname">Last Name</label>    <input type="text" name="user_lastname" id="user_lastname">
      <label for="user_email">Email Address</label>   <input type="text" name="user_email" id="user_email">
      <br/><br/>
      <button class="btn" type="submit"><h3>submit!</h3></button>
    </form>
  </section>
  <section class=" wrapper-form2">
  </section>
</article>


<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
<?php include "templates/footer.php"; ?>

<!--END FOOTER.
------------------------------------------------------------>