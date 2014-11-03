<?php
if((isset($_GET['term']))&&(!empty($_GET['term'])))
$term = strtolower(trim($_GET['term']));
else
exit();
if(empty($term))
exit();
header("Cache-Control: must-revalidate");
$offset = 60 * 60 * 24;
$expstr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
header($expstr);
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header('Content-type: application/json');
include("connection.php");
$query="SELECT ID,Type,Brand,Name,Category,Price,Thumbnail FROM products";
$result=mysqli_query($con,$query);
$array = array();
$lastarray = array();
$allsearch = array();
$allmisssearch = array();
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
				if(!in_array($splits,$searchterms)){
					$searchterms[] = $splits;
					$allsearch[]=$splits;
				}
				
			}
		}
	}
	$forloop['search']=$searchterms;
	$array[]=$forloop;
}
$allsearch = array_unique($allsearch);
$term = explode(' ',$term);
foreach ($allsearch as $searchterm){
$check = true;
foreach ($term as $match){
if((!empty($searchterm))&&(!empty($match))){
if ((strpos($match,$searchterm) !== false)){
$term[] = $searchterm;
$check = false;
}
}
}
$lastletter = substr($searchterm,-1);
if($lastletter=="s"){
$searchterm = substr($searchterm,0,-1);
}
if((strlen($searchterm)>4)&&($check)){
$allmisssearch[] = substr($searchterm,1);
$allmisssearch[] = substr($searchterm,0,-1);
}
}
$allmisssearch = array_unique($allmisssearch);
$term = array_unique($term);
foreach ($array as $variable){
	$mainpriority = 0;
	$subpriority = 0;
	$priority = 0;
	$searchterms = $variable['search'];
	foreach ($term as $match){
		if(in_array($match,$searchterms)){
			$mainpriority = $mainpriority+1;
		}
	}
	foreach ($term as $match){
		if(in_array($match,$allmisssearch)){
			foreach ($searchterms as $searchterm){
				if((!empty($searchterm))&&(!empty($match))){
					if ((strpos($searchterm,$match) !== false))
					$subpriority = $subpriority+1;
				}
			}
		}
	}
	$priority = $mainpriority+($subpriority/10);
	if($priority>0){
		$variable['priority']=$priority;
		$lastarray[]=$variable;
	}
}
$lastarray = array_orderby($lastarray, 'priority', SORT_DESC, 'ID', SORT_ASC);
echo json_encode($lastarray);
function array_orderby()
{
    $args = func_get_args();
    $data = array_shift($args);
    foreach ($args as $n => $field) {
        if (is_string($field)) {
            $tmp = array();
            foreach ($data as $key => $row)
                $tmp[$key] = $row[$field];
            $args[$n] = $tmp;
            }
    }
    $args[] = &$data;
    call_user_func_array('array_multisort', $args);
    return array_pop($args);
}
?>