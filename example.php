<?php

$doc = new doc;
$doc->read($filename);
return $doc->parse();
