<?php
$page = 'contatti';
include('header.php');
?>
<div class="row">
  <div class="col-xs-12">
    <h3>Come contattarmi</h3>
    <p>
      Per informazioni o per ricevere un preventivo gratuito, contattami!<br />
      Puoi scrivermi un’e-mail, compilare il <a href="#" data-toggle="modal" data-target="#contact_form">form online</a> oppure cercarmi
      nei social in cui sono presente!
    </p>
    <p>      
      info@silviagalasso.it <br />p.iva 01785320936
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