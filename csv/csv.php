<?php
$username="root";		$password="";		$database="shunem";
$con = mysql_connect("localhost",$username,$password) or die( "Unable to Connect database");
mysql_select_db($database,$con) or die( "Unable to select database");
// Table Name that you want
// to export in csv
$ShowTable = "book_hall";
$cat=$_POST['select'];

//$FileName = "_export.xlsx";
$FileName = "_export.csv";
$file = fopen($FileName,"w");

$sql = mysql_query("SELECT * FROM  $ShowTable");
//$sql = mysql_query("SELECT * FROM  $ShowTable");
$row = mysql_fetch_assoc($sql);
//Save headings alon
	$HeadingsArray=array();
	foreach($row as $name => $value){
		$HeadingsArray[]=$name;

	}
	fputcsv($file,$HeadingsArray); 

	
//Save all records without headings
	while($row = mysql_fetch_assoc($sql)){
	$valuesArray=array();
		foreach($row as $name => $value){
		$valuesArray[]=$value;
		}
	fputcsv($file,$valuesArray); 
	}
	fclose($file);

header("Location: $FileName");

echo "Complete Record saves as CSV in file: <b style=\"color:red;\">$FileName</b>";
?>