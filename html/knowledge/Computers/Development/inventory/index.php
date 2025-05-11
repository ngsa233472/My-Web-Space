<?php 
	include_once("db_connect.php");
	include("header.php"); 
?>
<title>Projects (In Progress)</title>
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<h3>Projects</h3>		 
	<table id="data_table" style="margin-left:auto; margin-right:auto; width: 95%"  class="table">
		<thead>
			<tr bgcolor="#A8B8AD">
				<th>Number</th>
				<th>Project</th>
				<th>Details</th>
				<th>Status</th>	
				<th>Scale</th>	
				<th>Information</th>
				<th>Other</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$sql_query = "SELECT id, project, details, status, scale, information, other FROM projects LIMIT 1000";
				$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
				while( $developer = mysqli_fetch_assoc($resultset) )
				{
			?>
			<tr bgcolor="#EACDA1">
			<td><?php echo $developer ['id']; ?></td>
			<td><?php echo $developer ['project']; ?></td>
			<td><?php echo $developer ['details']; ?></td>
			<td><?php echo $developer ['status']; ?></td>
			<td><?php echo $developer ['scale']; ?></td>     
			<td><?php echo $developer ['information']; ?></td>     
			<td><?php echo $developer ['other']; ?></td>  
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>	
<script type="text/javascript" src="custom_table_edit.js"></script>
<?php
	include('footer.php');
?>