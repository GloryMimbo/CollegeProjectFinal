<?php
	ob_start();
	session_start();
	$pageNo = "1";
	$pageTitle = "Visa Extension List";
	require_once("genfunctions.php");
	
	validate_login();

	require_once("common_header.php");

	$usertype = get_session('user_type');
	$reg_profile_id = get_session('reg_profile_id');

	if(request_get("job")=="delete"){
		$mid = request_get('del_id');
		$sql = "DELETE FROM `visa_extension` WHERE id = '".$mid."' ";
		$res = mysql_query($sql) or die("Select visa_extension Error : ".mysql_error());	
		header("location:visa_extension_list.php");
		exit;
	}

	$sql = "";

	if($usertype == "0") // Normal Users
	{
		$sql = " SELECT * FROM `visa_extension` WHERE reg_profile_id = '$reg_profile_id' ";
	}
	else if($usertype == "1") // Police
	{
		$sql = " SELECT * FROM `visa_extension` ";
	}
	else if($usertype == "2") // Airport
	{
		$sql = " SELECT * FROM `visa_extension` ";
	}
	else if($usertype == "3") // Admin
	{
		$sql = " SELECT * FROM `visa_extension` ";
	}

	$res = mysql_query($sql) or die("ERR".mysql_error());

?>

<table class="table table-bordered exDataTable ">
	<thead>
	<tr>
		<th width="5%">S.No</th>
		<th>Reg Profile ID</th>
		<th>Have you visiting RDCongo Before?</th>
		<th>if yes Year</th>
		<th>Date From</th>
		<th>Date To</th>
		<th>Reason for Extension</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>

	<?php
		if(mysql_num_rows($res)>0)
		{
			$sno=1;
			while ($r=mysql_fetch_assoc($res)) 
			{
			?>
			<tr>
				<td><?php echo $sno; ?></td>
				<td><?php echo $r['reg_profile_id']; ?></td>
				<td><?php echo $r['have_you_visiting_rdcongo_before']; ?></td>
				<td><?php echo $r['if_yes_year']; ?></td>
				<td><?php echo $r['date_from']; ?></td>
				<td><?php echo $r['date_to']; ?></td>
				<td><?php echo $r['reason_for_ext']; ?></td>
				<td><?php echo '<a onclick="teamDelete('.$r["id"].')"><span class="glyphicon glyphicon-trash"></span></a>'; ?></td>
			</tr>
			<?php
				$sno++;
			}

		}
		?>


	</tbody>
</table>
	

<?php
	require_once("common_footer.php");
?>
<script type="text/javascript">
function teamDelete(mid)
{
	var res = confirm("Are you sure do you really want to delete this?");
	if(res==true)
	{
		window.location.href="visa_extension_list.php?job=delete&del_id="+mid;	
	}
}
</script>