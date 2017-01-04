<?php
$page = 'index';
include('header.php');
?>
<div class="row">
  <div class="col-xs-12">
    <h3>Ciao!</h3>
    <p>
      Sono una grafica freelance con la passione della carta e dei <a href="#" data-toggle="modal" data-target="#libri">libri</a>, e un’innata propensione alla cura dei dettagli...<br />
      Scopri di pi&ugrave; su <a href="chi">chi</a> sono, <a href="cosa">cosa</a> faccio e come <a href="contatti">contattarmi</a>.<br />
      E, se ne hai voglia, dai un'occhiata al mio <a href="portfolio">portfolio</a>!
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