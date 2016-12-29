<?php
$page = 'index';
include('header.php');
?>
<div class="row">
  <div class="col-xs-12">
    <h3>Ciao!</h3>
    <p>
      Sono una grafica freelance con la passione della <strong>carta</strong> e dei <strong>libri</strong>, e un’innata propensione alla <strong>cura dei dettagli</strong>...<br />
      Scopri di pi&ugrave; su chi sono, cosa faccio e come contattarmi cliccando sul 
      <span class="hidden-md-down">men&ugrave;</span>
      <a class="hidden-lg-up" href="#" data-toggle="slide-collapse" data-target=".navbar-collapse" aria-controls="exCollapsingNavbar">men&ugrave;</a>
      in alto a destra!
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
    <br />
  </div>
  <div class="hidden-md-down">
    Libri che parlano di me... <a href="#" type="button" data-toggle="modal" data-target="#libri">curiosit&agrave;</a>!
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