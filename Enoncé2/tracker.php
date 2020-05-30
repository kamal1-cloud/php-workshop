
<?php
$name = "kamal";
$weightKg = 68;
$heightCm = 174;
$heightM = $heightCm/100;
$heightM2 = $heightM * $heightM; 
$IMC = $weightKg/$heightM2;

echo "Hi $name , your IMC is $IMC";

?>