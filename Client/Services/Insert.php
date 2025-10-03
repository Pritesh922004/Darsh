<?php 
require 'db/db.php';

if (isset($_POST['submit'])) {
$Data = array(
	'fullname' => $_POST['fullname'],
	'companyName' => $_POST['companyName'],
	'Email' => $_POST['Email'],
	'phone' => $_POST['phone'],
	'shipmentType' => $_POST['shipmentType'],
	'transportMode' => $_POST['transportMode'],
	'originCountry' => $_POST['originCountry'],
	'originPort' => $_POST['originPort'],
	'destCountry' => $_POST['destCountry'],
	'destPort' => $_POST['destPort'],
	'productDescription' => $_POST['productDescription'],
	'hsCode' => $_POST['hsCode'],
	'weight' => $_POST['weight'],
	'quantity' => $_POST['quantity'],
	'dimensions' => $_POST['dimensions'],
	'instructions' => $_POST['instructions']
);

}
?>