<?php
require_once 'xpath.php';
$startURl = "http://www.imdb.com/search/title?languages=hi|1&title_type=feature&sort=moviemeter,asc";


// title text "//td[@class='title']/a/text()"
// title href "//td[@class='title']/a/@href"
// $x("//span[@class='credit']/a/text()")


$xpath =new XPATH($startURl);

?>