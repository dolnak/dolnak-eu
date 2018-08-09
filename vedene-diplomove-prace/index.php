<?php

$lang = 'sk';

$title = 'Vedené diplomové práce';
$description = 'Zoznam mnou vedených diplomových prác na Elektrotechnickej fakulte Žilinskej univerzity v&nbsp;Žiline';
$h1 = 'Vedené diplomové práce';
$p_lead = '';

$content = <<<MAIN

<div class="jumbotron jumbotron-fluid bg-light border-bottom text-center">
  <div class="container">
    <h1 class="display-4">$h1</h1>
    <p class="lead">$p_lead</p>
  </div>
</div>
<div class="container">
  <h2>Od roku 2009 po súčasnosť</h2>
  <ul>
    <li>Bezpečnosť VoIP</li>
    <li>Metódy synchronizácie presného systémového času v LAN</li>
    <li>Generátor paketov protokolu SIP v jazyku Perl</li>
    <li>Analýza doby konvergencie dynamických smerovacích protokolov</li>
    <li>Zber a uchovávanie elektronickej komunikácie v zmysle platnej legislatívy SR</li>
    <li>Smerovanie medzi OSPF oblasťami prostredníctvom softvérového balíka Quagga</li>
    <li>Zabezpečenie redundancie predvolenej brány v LAN prostredníctvom VRRP protokolu</li>
    <li>Autentifikácia, autorizácia a účtovanie prístupu používateľov do LAN prostredníctvom protokolu IEEE 802.1x</li>
    <li>Implementácia QoS v LAN s podporou VoIP služieb</li>
    <li>Smerovanie protokolu IPv6 so zameraním na interoperabilitu s IPv4 sieťami</li>
    <li>Smerovanie protokolu IPv6 so zameraním na WAN siete</li>
    <li>Poštový server Postfix s podporou trvalého ukladania elektronickej pošty</li>
    <li>Zabezpečenie hraničného smerovača proti sieťovým útokom</li>
    <li>Škálovateľnosť protokolu iBGP v rámci autonómneho systému</li>
    <li>Riadenie prístupu vo virtuálnych privátnych sieťach</li>
    <li>Aktualizácia DNS záznamov prostredníctvom DHCP servera</li>
    <li>Bezpečnosť bezdrôtovej komunikácie v 802.11 s použitím WPA</li>
    <li>Šírenie multimediálneho obsahu vysielaním typu multicast</li>
    <li>Virtuálna privátna sieť prostredníctvom MPLS VPN</li>
    <li>Systémy detekcie a prevencie sieťových útokov IDS/IPS</li>
    <li>Smerovanie multimediálneho toku šíreného pomocou skupinového vysielania</li>
    <li>Špecifiká dynamických smerovacích protokolov vo Frame Relay sieťach</li>
    <li>Systém DNS s podporou IPv6 protokolu</li>
    <li>Redistribúcia medzi smerovacími doménami</li>
    <li>Technológie VPN sietí typu IPsec v podnikovom prostredí</li>
    <li>Minimalizácia doby konvergencie dynamických smerovacích protokolov</li>
    <li>Systém DNS s podporou DNSSEC rozšírenia</li>
    <li>Implementácia QoS v Mikrotik RouterOS</li>
    <li>Lokálna klasifikácia a značkovanie pre účely QoS v MikroTik RouterOS</li>
    <li>Virtuálna privátna sieť prostredníctvom MPLS AToM</li>
    <li>Implementácia BGP Route Servera v internetových peeringových centrách</li>
    <li>Detekcia a prevencia sieťových útokov IDS/IPS systémami</li>
    <li>Implementácia DMVPN sietí v podnikovom prostredí</li>
    <li>Technológie VPN sietí typu PPTP a L2TP v podnikovom prostredí</li>
    <li>Traffic Engineering v Mikrotik RouterOS</li>
    <li>Interoperabilita implementácií protokolu OpenVPN v operačných systémoch MikroTik RouterOS a Linux</li>
    <li>Implementácia SSL certifikátu doplnená o bezpečnostné hlavičky protokolov HTTP a HTTPS</li>
    <li>Redistribúcia medzi smerovacími doménami protokolov EIGRP a OSPF</li>
    <li>Technológie VPN sietí typu MPLS AToM v podnikovom prostredí</li>
  </ul>
</div>

MAIN;

require_once('../global.php');

?>