<?php
//Default name is "World"
$nombre=isset($argv[1]) ? $argv[1] : "World";
@print "Hello {$nombre}\n";
echo "Bye bye!";
?>