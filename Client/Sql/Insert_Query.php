<?php
function InsertRecord($conn, $data)
{
    try {
        if ($data) {
            $query = 'INSERT INTO Shipment_Details VALUES("","' . $data['fullname'] . '","' . $data['companyName'] . '","' . $data['Email'] . '","' . $data['phone'] . '","' . $data['shipmentType'] . '","' . $data['transportMode'] . '","' . $data['originCountry'] . '","' . $data['originPort'] . '","' . $data['destCountry'] . '","' . $data['destPort'] . '","' . $data['productDescription'] . '","' . $data['hsCode'] . '","' . $data['weight'] . '","' . $data['quantity'] . '","' . $data['dimensions'] . '","' . $data['instructions'] . '","' . $data['Shipment_Charge'] . '","' . $data['Shipment_Time'] . '")';
            return mysqli_query($conn, $query);
        }
        echo 'Data is not set';
    }
    catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }


}
?>