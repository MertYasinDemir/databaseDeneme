<?php
  try
{
$conn=new PDO("sqlsrv:Server=127.0.0.1;Database=deneme", "usertest", "usertest");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
die(print_r($e->getMEssage()));
}
$tsql="SELECT * FROM giris";
$getResults=$conn->prepare($tsql);
 $getResults->execute();
 $results=$getResults->fetchAll(PDO::FETCH_BOTH);
 
 foreach($results as $row){
	 echo $row['id'].' '.$row['kullanici'];
	 echo '<br>';
 }
 ?>