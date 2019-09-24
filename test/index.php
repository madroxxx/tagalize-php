<?php
require_once __DIR__.'/../src/index.php';
//require_once 
use TagalizePhp\Index;

$tagalog = new Index();

echo $tagalog->getTagalized("test");
echo "\n<br />\n";
