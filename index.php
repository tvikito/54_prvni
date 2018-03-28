<?php

include_once 'templates.php';

$sablona = "onecolumn";
$pagetitle = "První stránka";
$obsah = '
<img class="img-ja" src="img/ja_orig.jpg">
<h1>Papa of your UX and frontend code</h1>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur bibendum justo non orci. Vestibulum fermentum tortor id mi.</p>';

headerOneColumn($pagetitle, $obsah);

?>
