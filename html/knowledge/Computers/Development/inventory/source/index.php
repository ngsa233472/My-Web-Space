
<?php 
include_once("db_connect.php");
include("header.php");
?>
<title>Purchases</title>
<body>
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<div class="container home">
<style>
table {border-collapse: collapse;width: 100%;}
td,
th
{
border: 1px solid #000000;
text-align: left;
padding: 8px;
}
</style>	
<h2>Purchases</h2>		 
<table border="1" width="100%" id="data_table" class="table">
<thead>
<tr bgcolor="#A8B8AD">
<th>Number</th>
<th>Item</th>
<th>Source</th>
<th>Order Date</th>	
<th>Delivery Date</th>
</tr>
</thead>
<tbody>
<?php 
$sql_query = "SELECT id, item, source, order_date, expected_delivery FROM on_order LIMIT 10";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
while( $developer = mysqli_fetch_assoc($resultset) )
{
?>
<tr bgcolor="#EACDA1" id="<?php echo $developer ['id']; ?>">
<td><?php echo $developer ['id']; ?></td>
<td><?php echo $developer ['item']; ?></td>
<td><?php echo $developer ['source']; ?></td>
<td><?php echo $developer ['order_date']; ?></td>     
<td><?php echo $developer ['expected_delivery']; ?></td>     
</tr>
<?php } ?>
</tbody>
<script type="text/javascript" src="custom_table_edit.js"></script>
</table>	
<?php
include("footer.php");
?>

 



                                                                                                       