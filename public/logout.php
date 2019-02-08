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
    <div class="container container-logout">
        <article class="container container-logout">
            <section class="wrapper wrapper-logout">
                <h2>Hello you have logged out succesfully, session is destroyed</h2>
                <p>click <a href="login.php">here</a> to login again </p>
            </section>
            <section class="wrapper-wrapper-logout">
        </section>
        </article>
    </div>	
</main>
<?php   
  //session_start();        //to ensure using the same session
  session_destroy();      //destroy the session
  header("login.php");    //redirect back to "login.php" after logging out

  //echo var_dump($_SESSION)
?>	
</main>

<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
    <?php include "templates/footer.php"; ?>

<!--END FOOTER.
------------------------------------------------------------>