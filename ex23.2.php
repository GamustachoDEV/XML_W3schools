<?php
$xml = new SimpleXMLIterator('<books><book>Learn PHP</book></books>');

// rewind to the first element
$xml->rewind();

// check if valid
var_dump($xml->valid());

// move to the next element
$xml->next();

// check if valid - will be bool(false) because there is only one element
var_dump($xml->valid());
?>