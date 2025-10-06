<?php
$result;$Data;
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
		'instructions' => $_POST['instructions']
	];

}
$result = InsertRecord($conn, $Data);
if ($result) {
	header('Location:Service?status=success');
} else {
	// header('Location:Service?status=failed');
	// exit();
	echo $result;
}
mysqli_close($conn);
?>