<?php
$site = new DOMDocument();
$div =$site->createElement("div");

$class =$site->createAttribute("class");
$class->nodeValue ="wrapper";
$div->appendChild($class);
$heading =$site->createElement("h1");
$heading->nodeValue ="This is heading ";
$div->appendChild($heading);


$site->appendChild($div);
$html =$site->saveHTML();
echo $html;

?>