<?php

include_once("db_connect.php");

$input = filter_input_array(INPUT_POST);

if ($input['action'] == 'edit') 
{	
	$update_field='';
	if(isset($input['project']))
	{
		$update_field.= "project='".$input['project']."'";
		
	} else if(isset($input['details']))
	{
		$update_field.= "details='".$input['details']."'";
		
	} else if(isset($input['status']))
	{
		$update_field.= "status='".$input['status']."'";
		
	} else if(isset($input['scale']))
	{
		$update_field.= "scale='".$input['scale']."'";
		
	} else if(isset($input['information']))
	{
		$update_field.= "information='".$input['information']."'";
		
	} else if(isset($input['other']))
	{
		$update_field.= "other='".$input['other']."'";
	}	
if($update_field && $input['id'])
	{
		$sql_query = "UPDATE projects SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}
?>
