<?php

require_once "src/Unit.php";
require_once "src/Elf.php";
require_once "src/Soldier.php";

$unit1 = new Unit();

echo $unit1;
echo $unit1->walk("top");

echo "<br>";
echo "<br>";
echo "<br>";

$elf1 = new Elf();

echo $elf1;
echo $elf1->walk("top");
echo $elf1->walk("left");
echo $elf1->walk("bottom");
echo $elf1->walk("right");

echo "<br>";
echo "<br>";
echo "<br>";

$soldier1 = new Soldier();


echo $soldier1;
echo $soldier1->walk("top");
echo $soldier1->walk("top");
echo $soldier1->walk("top");
echo $soldier1->walk("top");
echo $soldier1->walk("top");
echo $soldier1->walk("top");
echo $soldier1->walk("top");
echo $soldier1->walk("left");
echo $soldier1->walk("bottom");
echo $soldier1->walk("right");