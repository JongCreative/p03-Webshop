<!--START HEAD & HEADER.
------------------------------------------------------------>

<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php //include('index.php');?>

<!--END HEAD & HEADER.
------------------------------------------------------------>



<!--START BODY LOG OUT.
------------------------------------------------------------>

<article class="container container-logout">
  <section class="wrapper wrapper-logout">
    <h2>Hello you have logged out succesfully, session is destroyed</h2>
  </section>
  <section class="wrapper-wrapper-logout">
    <p>click <a href="login.php">here</a> to login again </p>
  </section>
</article>

<?php   
  session_start();        //to ensure using the same session
  session_destroy();      //destroy the session
  header("login.php");    //redirect back to "login.php" after logging out

  echo var_dump($_SESSION)
?>


<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
<?php include ('footer.php'); ?>

<!--END FOOTER.
------------------------------------------------------------>