<?php
require "./components/header.php";  echo $heading="<h2>Variable Variables</h2>";

$foo = "bar"; // foo has value "bar"
$$foo = "data"; // bar has value "data"
echo "\$foo:\t";
echo $foo; //prints bar
echo "\n";

echo "\${\$foo}:\t";
echo ${$foo}; //prints data
echo "\n";

echo "\$\$foo:\t";
echo $$foo; //prints data
echo "\n";

echo "\$bar:\t";
echo $bar; //prints data
echo "\n";