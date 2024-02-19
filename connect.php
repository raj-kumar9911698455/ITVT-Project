<?php
$Name= $_POST['name'];
$Email= $_POST['email'];
$Phone= $_POST['phone'];
$Message= $_POST['message'];
//Database Connection
$conn= new mysqli('localhost:3308', 'root', '', 'itvt_project');
if ($conn->connect_error) {
die('Connection Failed : '.$conn->connect_error);
}
else {
$stmt= $conn->prepare("insert into 
contact_form(Name,Email,Phone,Message) values(?, ?, ?, ?)");
$stmt-> bind_param("ssis", $Name, $Email, $Phone, $Message);
$stmt-> execute();
echo "Thank you for visiting, we'll contact you shortly.....";
$stmt-> close();
$conn-> close(); 
}
?>