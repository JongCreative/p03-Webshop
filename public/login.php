<!--START HEAD & HEADER.
------------------------------------------------------------>
  <?php include "templates/head.php"; ?>
	<?php include "templates/header.php"; ?>

<!--END HEAD & HEADER.
------------------------------------------------------------>



<!--START POP-UP LOGIN.
------------------------------------------------------------>
<article class="container container-login">
  <section class="wrapper wrapper-login1">
    <h2>Login form</h2>
    <form class="form-login" action="formHandlerLogin.php" method="POST">
      <label for="user_email">Email</label>           <input type="text" name="user_email" id="user_email" autofocus>
      <label for="user_password">Password</label>     <input type="password" name="user_password" id="user_password" autofocus>
      <br/><br/>
      <button class="btn" type="submit"><h3>log me in!</h3></button>
    </form>
  </section>
  <section class="wrapper-login2">
  </section>
</article>

<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
<?php include "templates/footer.php"; ?>

<!--END FOOTER.
------------------------------------------------------------>