<?php
	session_start();
	$pageNo = "1";
	$pageTitle = "Visa Extension";
	require_once("genfunctions.php");
	
	validate_login();

	require_once("common_header.php");

	$reg_profile_id = get_session("reg_profile_id");
	$ve_id = get_session("ve_id");

	$job = request_get('job');

	$sql = "SELECT * FROM `register` WHERE id = '$reg_profile_id' ";
	$res = mysql_query($sql) or die("ERR".mysql_error());
	$r = mysql_fetch_assoc($res);

	$visa_number = $r['visa_number'];
	$visa_country_of_issue = $r['visa_country_of_issue'];
	$visa_place_of_issue = $r['visa_place_of_issue'];
	$visa_date_of_issue = $r['visa_date_of_issue'];
	$visa_expire_date = $r['visa_expire_date'];
	$visa_validity = $r['visa_validity'];
	$visa_type = $r['visa_type'];


	if(isset($_POST['save_visa_ext']))
	{
		$ve_id = request_get("ve_id");

		$reg_profile_id = request_get("reg_profile_id");
		$have_you_visiting_rdcongo_before = request_get("have_you_visiting_rdcongo_before");
		$if_yes_year = request_get("if_yes_year");
		$date_from = request_get("date_from");
		$date_to = request_get("date_to");
		$reason_for_ext = request_get("reason_for_ext");

		if($ve_id>0)
		{
			$sql = "UPDATE `visa_extension` SET `reg_profile_id` = '$reg_profile_id', `have_you_visiting_rdcongo_before` = '$have_you_visiting_rdcongo_before', `if_yes_year` = '$if_yes_year', `date_from` = '$date_from', `date_to` = '$date_to', `reason_for_ext` = '$reason_for_ext' WHERE id = '$ve_id' ";
			$res = mysql_query($sql) or die("ERR".mysql_error());

		}else{

			$sql = "INSERT INTO `visa_extension` (`id`, `reg_profile_id`, `have_you_visiting_rdcongo_before`, `if_yes_year`, `date_from`, `date_to`, `reason_for_ext`, `ts`) VALUES (NULL, '$reg_profile_id', '$have_you_visiting_rdcongo_before', '$if_yes_year', '$date_from', '$date_to', '$reason_for_ext', CURRENT_TIMESTAMP)";
			$res = mysql_query($sql) or die("ERR".mysql_error());
		}

		echo '<div class="container"><center><div class="alert alert-success">Saved Successfully!!</div></center></div>';

	}

?>
<style type="text/css">
label{
	font-weight: bold;
}
</style>
<form method="post">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">Visa Details</h4>
		</div>
		<div class="panel-body">

        	<div class="row">
        		<div class="col-sm-3">
        			<label>Visa Number</label>
                  	<div><?php echo $visa_number; ?></div>
        		</div>
        		<div class="col-sm-3">
        			<label>Country of Issue</label>
                  	<div><?php echo getCountriesNameById($visa_country_of_issue); ?></div>
        		</div>
        		<div class="col-sm-3">
        			<label>Place of Issue</label>
        			<div><?php echo $visa_place_of_issue; ?></div>
        		</div>
        		<div class="col-sm-3">
        			<label>Date of Issue</label>
        			<div><?php echo $visa_date_of_issue; ?></div>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3">
        			<label>Visa Expire Date</label>
                  	<div><?php echo $visa_expire_date; ?></div>
        		</div>
        		<div class="col-sm-3">
        			<label>Visa Validity</label>
                  	<div><?php echo $visa_validity; ?></div>
        		</div>
        		<div class="col-sm-3">
        			<label>Visa Type</label>
                  	<div><?php echo $visa_type; ?></div>
        		</div>
        		<div class="col-sm-3">
        			<label>Visa Copy</label>
                  	<?php
                  		if($visa_copy!="")
                  		{
                  	?>
                  		<div><a href="<?php echo $visa_copy; ?>" target="_blank">Download</a></div>
                  	<?php
                  		}
                  	?>
        		</div>
        	</div>
		</div>
	</div>
	<br>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><?php if(isset($pageTitle)) echo $pageTitle; else echo "Home"; ?></h4>
		</div>
		<div class="panel-body">

			<div class="row">
				<div class="col-sm-3">
					<label>Have you visiting RD Congo Before?</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $have_you_visiting_rdcongo_before; ?></div>
                  	<?php
                  		}else{
                  	?><br>
                  		<input type="radio" name="have_you_visiting_rdcongo_before" id="have_you_visiting_rdcongo_before_yes" tabindex="2" value="YES" <?php if($have_you_visiting_rdcongo_before=="YES") echo "checked='checked'"; ?> > <label for="have_you_visiting_rdcongo_before_yes">YES</label>
                  		<input type="radio" name="have_you_visiting_rdcongo_before" id="have_you_visiting_rdcongo_before_no" tabindex="3" value="NO" <?php if($have_you_visiting_rdcongo_before=="NO") echo "checked='checked'"; ?> > <label for="have_you_visiting_rdcongo_before_no">NO</label>
                  	<?php
                  		}
                  	?>
				</div>
				<div class="col-sm-3">
					<label>if YES, Specify Year</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $if_yes_year; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="if_yes_year" id="if_yes_year" tabindex="4" value="<?php echo $if_yes_year; ?>" />
                  	<?php
                  		}
                  	?>
				</div>
				<div class="col-sm-3">
					<label>Date From</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $date_from; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control datepicker" name="date_from" id="date_from" tabindex="5" value="<?php echo $date_from; ?>" />
                  	<?php
                  		}
                  	?>
				</div>
				<div class="col-sm-3">
					<label>To Date</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $date_to; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control datepicker" name="date_to" id="date_to" tabindex="6" value="<?php echo $date_to; ?>" />
                  	<?php
                  		}
                  	?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label>Reason for Extension</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $reason_for_ext; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<textarea class="form-control" name="reason_for_ext" id="reason_for_ext" tabindex="7"><?php echo $reason_for_ext; ?></textarea>
                  	<?php
                  		}
                  	?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-12">
					<input type="hidden" name="reg_profile_id" value="<?php echo $reg_profile_id; ?>"> 
					<input type="hidden" name="ve_id" value="<?php echo $ve_id; ?>"> 
					<center> <input type="submit" name="save_visa_ext" id="save_visa_ext" value="Submit" class="btn btn-primary" /> <input type="reset" class="btn btn-default" value="Reset"> </center>
				</div>
			</div>
		</div>
	</div>
</form>

<?php
	require_once("common_footer.php");
?>
<script type="text/javascript">
	
	$(document).ready(function(){

		$("#if_yes_year").prop("readonly",true);

		$(".datepicker").datepicker({format: 'yyyy-mm-dd'});

		$("#have_you_visiting_rdcongo_before_yes").click(function(){

			$("#if_yes_year").prop("readonly",false);
			
		});

		$("#have_you_visiting_rdcongo_before_no").click(function(){

			$("#if_yes_year").prop("readonly",true);

		});

	});
</script>
