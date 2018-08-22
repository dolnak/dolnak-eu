<?php

$lang = 'sk';

$title = 'Získané odborné certifikáty';
$description = 'Overte si moju odbornosť. Svoju odbornosť v oblasti počítačových sietí dokazujem získaním a obnovovaním nasledujúcich certifikátov.';
$h1 = 'Získané odborné certifikáty';
$p_lead = '';

$content = <<<MAIN

<div class="jumbotron jumbotron-fluid bg-light bg-image border-bottom text-center">
  <div class="container">
    <h1 class="display-4">$h1</h1>
    <p class="lead">$p_lead</p>
  </div>
</div>
<div class="container">
  <h2 id="cisco">Cisco
    <small class="text-muted">- počítačové siete</small>
  </h2>
  <p>
    <a href="https://www.dolnak.eu/certifikaty/cisco-ccna.pdf">CCNA (Cisco Certified Network Associate)</a><br>
    CCAI CCNA (Cisco Certified Academy Instructor CCNA)<br>
    <a href="https://www.dolnak.eu/certifikaty/cisco-ccnp.pdf">CCNP (Cisco Certified Network Professional)</a><br>
    <a href="https://www.dolnak.eu/certifikaty/cisco-ccda.pdf">CCDA (Cisco Certified Design Associate)</a><br>
    <a href="https://www.dolnak.eu/certifikaty/cisco-ccdp.pdf">CCDP (Cisco Certified Design Professional)</a><br>
    Cisco Engineer Incubator Program, Edition 2.0 (Certificate of Attendance)
  </p>
  <h2 id="mikrotik">MikroTik
    <small class="text-muted">- počítačové siete</small>
  </h2>
  <p>
    <a href="https://www.dolnak.eu/certifikaty/mikrotik-mtcna.pdf">MikroTik Certified Network Associate (MTCNA)</a><br>
    <a href="https://www.dolnak.eu/certifikaty/mikrotik-mtcre.pdf">MikroTik Certified Routing Engineer (MTCRE)</a><br>
    <a href="https://www.dolnak.eu/certifikaty/mikrotik-mtcwe.pdf">MikroTik Certified Wireless Engineer (MTCWE)</a><br>
    <a href="https://www.dolnak.eu/certifikaty/mikrotik-mtctce.pdf">MikroTik Certified Traffic Control Engineer (MTCTCE)</a><br>
    <a href="https://www.dolnak.eu/certifikaty/mikrotik-mtcume.pdf">MikroTik Certified User Management Engineer (MTCUME)</a><br>
    <a href="https://www.dolnak.eu/certifikaty/mikrotik-mtcipv6e.pdf">MikroTik Certified IPv6 Engineer (MTCIPv6E)</a><br>
    <a href="https://www.dolnak.eu/certifikaty/mikrotik-mtcine.pdf">MikroTik Certified Inter-networking Engineer (MTCINE)</a><br>
    <a href="https://www.dolnak.eu/certifikaty/mikrotik-trainer.pdf">MikroTik Trainer</a><br>
    <a href="https://www.dolnak.eu/certifikaty/mikrotik-academy-trainer.pdf">MikroTik Academy Trainer</a>
  </p>
  <h2 id="google">Google
    <small class="text-muted">- digitálny marketing</small>
  </h2>
  <p>
    <a href="https://www.dolnak.eu/certifikaty/google-digitalna-garaz.pdf">Digitálna garáž</a>
  </p>
  <h2 id="profiber">PROFiber
    <small class="text-muted">- vláknová optika</small>
  </h2>
  <p>
    <a href="https://www.dolnak.eu/certifikaty/profiber-zaklady-vlaknovej-optiky.pdf">Základy vláknovej optiky</a><br>
    <a href="https://www.dolnak.eu/certifikaty/profiber-zvaranie-a-spajanie-optickych-vlakien.pdf">Zváranie a spájanie optických vlákien</a><br>
    <a href="https://www.dolnak.eu/certifikaty/profiber-meranie-a-vyhodnocovanie-optickych-kablovych-tras.pdf">Meranie a vyhodnocovanie optických káblových trás</a>
  </p>
</div>

MAIN;

require_once('../global.php');

?>