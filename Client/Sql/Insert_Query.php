<?php
function InsertRecord($conn,$data)
{
$query ='INSERT INTO Shipment_Details VALUES("","'.$data['fullname'].'","'.$data['companyName'].'","'.$data['Email'].'","'.$data['phone'].'","'.$data['shipmentType'].'","'.$data['transportMode'].'","'.$data['originCountry'].'","'.$data['originPort'].'","'.$data['destCountry'].'","'.$data['destPort'].'","'.$data['productDescription'].'","'.$data['hsCode'].'","'.$data['weight'].'","'.$data['quantity'].'","'.$data['dimensions'].'","'.$data['instructions'].'")';

try{
    if(mysqli_query($conn,$query))
    {
        header("Location: /Darsh/Client/Services?Status=Success");
    }
}
catch(Exception $e)
{
echo $e;
}

}
?>