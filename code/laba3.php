<?php
$language = "/a.{2}b/";
$text = "ahb acb aeb aeeb adcb axeb a2db";
$matches = [];
$count = preg_match_all($language, $text, $matches);
print_r($matches);
echo "<br>";
$language = "/(\d)+/";
$string = "a1b2c3";
echo preg_replace_callback($language, fn($matches) => intval($matches[0]) ** 2, $string);