<?php 
	include_once("db_connect.php");
	include("header.php"); 
?>
<title>Projects (In Progress)</title>
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<h3><center>Projects</center></h3>
<style 	type="text/css">
table, th, td {
border: 2px solid;
}
</style> 
	<table id="data_table" border="1" style="margin-left:auto; margin-right:auto; width: 95%"  class="table">
		<thead>
			<tr bgcolor="#A8B8AD">
				<?php 
				?>
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
			<td><?php echo $developer ['project']; ?></td>
			<td><?php echo $developer ['details']; ?></td>
			<?php if ($developer ['status'] == "Done") : ?>
				<td><font color="blue"><?php echo $developer ['status']; ?></font></td>
			<?php elseif($developer ['status'] == "In Progress") : ?>
				<td><font color="green"><?php echo $developer ['status']; ?></font></td>
			<?php elseif($developer ['status'] == "On Hold") : ?>
				<td><font color="red"><?php echo $developer ['status']; ?></font></td>
			<?php else : ?>
				<td><?php echo $developer ['status']; ?></td>
			<?php endif; ?>
			<td><?php echo $developer ['scale']; ?></td>     
			<td><?php echo $developer ['information']; ?></td>     
			<td><?php echo $developer ['other']; ?></td>  
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>	
<?php
	include('footer.php');
?>