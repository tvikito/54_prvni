<?php

include_once 'templates.php';

$sablona = "onecolumn";
$pagetitle = "Write me! Yes!";
$obsah = '
<img class="img-ja" src="img/ja_100.jpg" srcset="img/ja_100.jpg, img/ja_200.jpg" width="100" height="100" alt="Tomáš Vykoukal">
<h1>Contact</h1>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur bibendum justo non orci. Vestibulum fermentum tortor id mi.</p>';

template_contact($pagetitle, $obsah);

?>
