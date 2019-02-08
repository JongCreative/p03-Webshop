<!--START HEAD & HEADER.
------------------------------------------------------------>
  <?php include ('head.php'); ?>
	<?php include ('header.php'); ?>

<!--END HEAD & HEADER.
------------------------------------------------------------>



<!--START LOGIN.
------------------------------------------------------------>
<article class="container container-login">
  <section class="wrapper wrapper-login1">
    <h2>Login form</h2>
    <form class="form-login" action="index.php" method="POST">
      <?php if (isset ($login_status) && false == $login_status): ?>
          <div class="error-login">
              <p> email and/or password are incorrect. try again </p>
          </div>
      <?php endif; ?>
      <label for="username">Email</label>           <input type="text" name="username" id="username" autofocus>
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
<?php include ('footer.php'); ?>

<!--END FOOTER.
------------------------------------------------------------>