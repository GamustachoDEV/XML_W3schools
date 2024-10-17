<?php
$dom=new domDocument;
$dom->loadXML("<books><book><title>Title1</title></book><book><title>Title2</title></book></books>");
$x=simplexml_import_dom($dom);
echo $x->book[1]->title;
?>