<?php

$seeds = $_POST["seeds"];
$umbrella = $_POST["umbrella"];
$bandana = $_POST["bandana"];

$user = $_POST["user"];
$pswd = $_POST["pswd"];

$shipping = $_POST["shipping"];
$shippingCost = 0;

$seedPrice = 5;
$umbrellaPrice = 10;
$bandanaPrice = 100;

switch ($shipping) {
	case "Free 7 Day":
		$shippingCost = 0;
		break;
	case "$50 Overnight":
		$shippingCost = 50;
		break;
	case "$5 Three Day":
		$shippingCost = 5;
		break;
}
		
$totalSeeds = $seeds*$seedPrice;
$totalUmbrellas = $umbrella*$umbrellaPrice;
$totalBandanas = $bandana*$bandanaPrice;

$total = $totalSeeds + $totalUmbrellas + $totalBandanas + $shippingCost;

echo '<div style="text-align: center">';
echo "Thank you for your purchase, ".$user."!!!<br>";
echo "Your password: ".$pswd."<br><br>";
echo "Seeds: ".$seeds." @ ".$seedPrice."$ = ".$totalSeeds."$<br>";
echo "Umbrellas: ".$umbrella." @ ".$umbrellaPrice."$ = ".$totalUmbrellas."$<br>";
echo "Bandanas: ".$bandana." @ ".$bandanaPrice."$ = ".$totalBandanas."$<br><br>";
echo "Shipping: ".$shipping."<br>";
echo "Total Cost: ".$total."$<br>";
echo '</div>';
?>
