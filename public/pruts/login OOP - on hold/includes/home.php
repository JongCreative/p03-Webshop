<!--START HEAD & HEADER.
------------------------------------------------------------>

<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('load.php');?>

<!--END HEAD & HEADER.
------------------------------------------------------------>



<!--START POP-UP LOGIN.
------------------------------------------------------------>
<article class="container container-welcome">
  <section class="wrapper wrapper-welcome1">
    <h2>welcome <?php var_dump($user);?></h2>
  </section>
  <section class="wrapper-wrapper-welcome2">
    <p>click <a href="logout.php">here</a> to logout </p>
  </section>
</article>

<!--END BODY.
------------------------------------------------------------>



<!--START FOOTER.
------------------------------------------------------------>
<?php include ('footer.php'); ?>

<!--END FOOTER.
------------------------------------------------------------>