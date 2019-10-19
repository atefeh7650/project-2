<?php
try
{
$connect=new PDO("mysql:host=localhost;dbname=learn","root","");
return $connect;
}
catch(PDOException $error)
{
echo "Error in Connect";	
}
?>
