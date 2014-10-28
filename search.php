<?php
Header("Cache-Control: must-revalidate");
$offset = 60 * 60 * 24;
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header('Content-type: application/json');
include("connection.php");
$query="SELECT ID,Type,Brand,Name,Category FROM products WHERE Ell_Rec='True'";
$result=mysqli_query($con,$query);
$array = array();
foreach ($result as $row)
{
	$forloop = array();
	$searchterms = array();
	foreach ($row as $key => $value)
	{
		if(!is_numeric($key))
		$forloop[$key]=$value;
		if($key!='ID'){
			$searchtermsarray=explode(' ',strtolower($value));
			foreach($searchtermsarray as $splits){
				if(!in_array($splits,$searchterms)) 
				$searchterms[] = $splits;
			}
		}
	}
	$forloop['search']=$searchterms;
	$array[]=$forloop;
}
echo json_encode($array);
?>