<?php
$page = 'contatti';
include('header.php');
?>
<div class="row">
  <div class="col-xs-12 col-md-8">
    <h3>Come contattarmi</h3>
    <p>
      Per informazioni o per ricevere un preventivo gratuito, contattami!<br />
      Puoi scrivermi un’e-mail, compilare il form online oppure cercarmi
      nei social in cui sono presente!
    </p>
    <p>      
      info@silviagalasso.it P.IVA 01785320936
    </p>
  </div>
  <div class="col-md-4 hidden-md-down">
    I miei prezzi? Scarica qui il TARIFFARIO!
  </div>
  <div class="col-xs-12 hidden-lg-up">
    <?php include('social_links'); ?>
  </div>
</div>
<?php
include('footer.php');
?>