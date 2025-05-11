<?php
$test=2;
if ($test>1) {
  trigger_error("Value must be 1 or below");
}
?>

<?php

include_once("db_connect.php");



$input = filter_input_array(INPUT_POST);

if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['item'])){
		$update_field.= "item='".$input['item']."'";
	} else if(isset($input['source'])){
		$update_field.= "source='".$input['source']."'";
	} else if(isset($input['order_date'])){
		$update_field.= "order_date='".$input['order_date']."'";
	} else if(isset($input['expected_delivery'])){
		$update_field.= "expected_delivery='".$input['expected_delivery']."'";
	}	
if($update_field && $input['id'])
	{
		$sql_query = "UPDATE developers SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}
?>
