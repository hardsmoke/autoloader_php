<?php

spl_autoload_register(function($className) {
    $path = __DIR__ . "/src/" . str_replace("\\", "/", $className) . ".php";
    require($path);
});

use FirstClassFolder\FirstClass;
use FirstClassFolder\SecondClassFolder\SecondClass;

$firstClassObj = new FirstClass();
$secondClassObj = new SecondClass();

echo "firstClass file directory: " . $firstClassObj->getDirectory();
echo "<br>";
echo "secondClass file directory: " . $secondClassObj->getDirectory();
