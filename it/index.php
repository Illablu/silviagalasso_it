<?php
$page = 'index';
include('header.php');
?>
<div class="row">
  <div class="col-xs-12">
    <h3>Ciao!</h3>
    <p>
      Sono una grafica freelance con la passione della <strong>carta</strong> e dei <strong>libri</strong>, e un’innata propensione alla <strong>cura dei dettagli</strong>...<br />
      Scopri di più su chi sono, cosa faccio e come contattarmi cliccando sul <a href="#">menù</a> in alto a destra!
    </p>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-8">
    <ul class="homepage__portfolio list-inline">
      <li class="list-inline-item"><img src="/portfolio/th_dummy.png" alt="" class="img-thumbnail"></li>
      <li class="list-inline-item"><img src="/portfolio/th_dummy.png" alt="" class="img-thumbnail"></li>
      <li class="list-inline-item"><img src="/portfolio/th_dummy.png" alt="" class="img-thumbnail"></li>
      <li class="list-inline-item"><img src="/portfolio/th_dummy.png" alt="" class="img-thumbnail"></li>
      <li class="list-inline-item"><img src="/portfolio/th_dummy.png" alt="" class="img-thumbnail"></li>
      <li class="list-inline-item"><img src="/portfolio/th_dummy.png" alt="" class="img-thumbnail"></li>
    </ul>
    <p class="text-xs-right"><a class="section_link" href="#">portfolio</a></p>
  </div>
  <div class="col-xs-12 col-md-3">
    Libri che parlano di me... curiosità!
    &agrave;
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <ul class="social_links homepage__social_links list-inline">
      <?php include('social_links.php'); ?>
    </ul>
  </div>
</div>
<?php
include('footer.php');
?>