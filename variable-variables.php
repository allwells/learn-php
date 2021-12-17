<?php
require "./components/header.php";  echo $heading='<h2 style="color: #333;">Variable Variables</h2>';

$foo = "bar"; // foo has value "bar"
$$foo = "data"; // bar has value "data"
echo "<p>\$foo: ";
echo $foo . "</p>"; //prints bar

echo "<p>\$\$foo: ";
echo $$foo . "</p>"; //prints data

echo "<p>\$bar: ";
echo $bar . "</p>"; //prints data