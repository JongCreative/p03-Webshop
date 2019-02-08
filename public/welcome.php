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
	<div class="container container-contact">
		<article class="wrapper wrapper-form1">
        <h2>welcome
        <?php echo $_SESSION['user_firstname']; ?>
        </h2>
        <img class="logo-small" src="img/logo.jpg" alt="logo">
			<form class="form-contact" action="logout.php" method="post">
				<button class="btn btn-logout" type="submit" name="submit">logout</button>
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