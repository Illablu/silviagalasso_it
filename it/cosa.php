<?php
$page = 'cosa';
include('header.php');
?>
<div class="row">
  <div class="col-xs-12 col-lg-7">
    <h3>Di cosa mi occupo?</h3>
    <p class="no_breakline">
      Principalmente di impaginare testi destinati alla stampa 
      <span class="hidden-md-down">(vedi elenco a lato).<br /></span>
      <span class="hidden-lg-up">
        (<a data-toggle="collapse" href="#elenco_servizi" aria-expanded="false" aria-controls="elenco_servizi">visualizza elenco</a>). <br />
      </span>
    </p>
    <div class="hidden-lg-up collapse" id="elenco_servizi">
      <br />
      <?php include('elenco_servizi.php'); ?>
    </div>
    <p>
      Ma anche di grafica pubblicitaria, immagini coordinate, branding e rebranding, creazione di loghi, fotoritocco, realizzazione di immagini vettoriali, correzione bozze e revisione testi!<br />
      Il principio che mi guida è:<br />
      “<strong>che sia bello, pulito, semplice, efficace, preciso e corretto</strong>”. <br />
      Prendo in prestito le parole di due personaggi importanti e noti:<br />
      “If I cannot do great things, I can do small things <strong>in a great way</strong>” —- Martin Luther King Jr<br />
      ”I want everything we do to be <strong>beautiful</strong> [...] <strong>I want to make beautiful things</strong>, even if nobody cares” —- Saul Bass<br />
      A differenza di Saul Bass, tuttavia, a me importa (e sono certa che in realtà importasse anche a lui!) che il cliente comprenda il mio lavoro e ne risulti soddisfatto!<br />
      La parola-chiave è: <strong>sinergia</strong>.
    </p>
  </div>
  <div class="col-lg-5 hidden-md-down">
    <br />
    <?php include('elenco_servizi.php'); ?>
  </div>
  <div class="col-xs-12 hidden-lg-up">
    <ul class="social_links sidebar__social_links list-inline">
      <?php include('social_links.php'); ?>
    </ul>
  </div>
</div>
<?php
include('footer.php');
?>