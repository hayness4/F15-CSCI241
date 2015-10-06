<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	//return back the cost of the salt
	
}
function calculateSaltShippingCost($pounds)
{
	//Goal: return back the cost of the shipping
	//figure out how many bags of salt I am shipping
	$bags = ceil($pounds/50);
	
	//figure out how many pallets
	$pallets = $bags/40;
	
	//figure out how many gaggles
	$gaggles = (int) ($bags / 8);
	$bags = $bags % 40;
	
	//figure out how many single bags are left
	
	//calculate the cost of shipping that number of pallets, gaggles, and single bags
	return;
}

?>