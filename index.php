<?php

include_once 'templates.php';

$title = "První stránka";

$desc = 'Everything you need to know about the topic you are looking for';

$obsah = '
<img class="img-ja" src="/img/ja_100.jpg" srcset="/img/ja_100.jpg, /img/ja_200.jpg" width="100" height="100" alt="Tomáš Vykoukal">
<h1>Papa of your UX and frontend code</h1>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur bibendum justo non orci. Vestibulum fermentum tortor id mi.</p>';

template_head($title, $desc);
template_body($obsah);

?>
