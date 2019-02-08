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
	<div class="container container-contact">
		<article class="wrapper wrapper-form1">
		<img class="logo-small" src="img/logo.jpg" alt="logo">
		<h2>contact form</h2>
			<form class="form-contact" action="includes/formHandlerContact.php" method="post">
				<label for="name">your name</label>		<input type="text" name="name" autofocus>
				<label for="mail">your e-mail</label>	<input type="text" name="mail">
				<label for="subject">subject</label>	<input type="text" name="subject">
				<label for="message">message</label>	<textarea type="text" name="message"></textarea><br/>
				<button class="btn" type="submit" name="submit">SEND MAIL</button>
			</form>
		</article>
</div>	
</main>

<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
    <?php include "templates/footer.php"; ?>

<!--END FOOTER.
------------------------------------------------------------>