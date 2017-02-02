<?php
$page = 'contatti';
include('header.php');
?>
<div class="row">
  <div class="col-xs-12">
    <h3>Contact me</h3>
    <p>
      If you need more info or you’d like to request a free quote, please contact me!<br />
      You can write me an <a href="mailto:info@silviagalasso.it">e-mail</a>, fill out the <a href="#" data-toggle="modal" data-target="#contact_form">online form</a> or find me on social media!
    </p>
    <p>&nbsp;</p>
  </div>
  <div class="col-xs-12 align-center">
    <ul class="social_links sidebar__social_links list-inline">
      <?php include('social_links.php'); ?>
    </ul>
  </div>
</div>
<?php
include('footer.php');
?>