<?php

if (!isset($use_base)) {
    $use_base = false;
}

$site = file_get_contents('template.php', true);
if ($use_base) {
    $site = str_replace('<head>', '<head><base href="transit/">', $site);
}

echo $site;


