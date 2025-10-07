<?php
$result;$Data;
$Shipment_type = isset($_GET['type']) ? $_GET['type'] : '';
require 'db/db.php';
require 'Sql/Insert_Query.php';
global $conn;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$Data = [
		'fullname' => $_POST['fullName'],
		'companyName' => $_POST['companyName'],
		'Email' => $_POST['email'],
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
		'instructions' => $_POST['instructions'],
		'Shipment_Charge' => $_POST['chargeCode'],
		'Shipment_Time' => $_POST['time']
	];

}
$result = InsertRecord($conn, $Data);
if ($result) {
	header('Location:Service?type=' . $Shipment_type . '&status=success');
} else {
	header('Location:Service?type=' . $Shipment_type . '&status=failed');
	exit();
}
mysqli_close($conn);
?>