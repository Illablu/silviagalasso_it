<?php
$page = 'index';
include('header.php');
?>
<div class="row">
  <div class="col-xs-12">
    <h3>Hello!</h3>
    <p>
      I’m a freelance editorial designer; I love <a href="#" data-toggle="modal" data-target="#libri">books</a> and paper and I have a natural vocation to details and quality...<br />
      Find out <a href="about">who</a> I am, <a href="what-i-do">what</a> I do, how to <a href="contact-me">contact me</a> and, if you like it, take a look at my <a href="portfolio">portfolio</a>!
    </p>
    <p>&nbsp;</p>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 align-center">
    <ul class="social_links homepage__social_links list-inline">
      <?php include('social_links.php'); ?>
    </ul>
  </div>
</div>
<?php
include('footer.php');
?>