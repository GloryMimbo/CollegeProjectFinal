<?php
	session_start();
	$pageNo = "1";
	$pageTitle = "Exit Permit";
	require_once("genfunctions.php");
	
	validate_login();

	require_once("common_header.php");

	$reg_profile_id = get_session("reg_profile_id");
	$ve_id = get_session("ep_id");

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


    if(isset($_POST['ep_register']))
    {
        $ep_id = request_get("ep_id");

        $reg_profile_id = request_get("reg_profile_id");
        $departure_date = request_get("departure_date");
        $expected_stay_in_date = request_get("expected_stay_in_date");
        $reason_for_delay = request_get("reason_for_delay");

        if($ep_id>0)
        {
            $sql = "UPDATE `exit_permit` SET `reg_profile_id` = '$reg_profile_id', `departure_date` = '$departure_date', `expected_stay_in_date` = '$expected_stay_in_date', `reason_for_delay` = '$reason_for_delay' WHERE id = '$ep_id' ";
            $res = mysql_query($sql) or die("ERR".mysql_error());

        }else{

            $sql = "INSERT INTO `exit_permit` (`id`, `reg_profile_id`, `departure_date`, `expected_stay_in_date`, `reason_for_delay`, `ts`) VALUES (NULL, '$reg_profile_id', '$departure_date', '$expected_stay_in_date', '$reason_for_delay', CURRENT_TIMESTAMP)";
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
					<label>Departure Date</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $departure_date; ?></div>
                    <?php
                        }else{
                    ?>
                        <input type="text" class="form-control datepicker" name="departure_date" id="departure_date" tabindex="2" value="<?php echo $departure_date; ?>" />
                    <?php
                        }
                    ?>
				</div>
				<div class="col-sm-3">
					<label>Expected stay in Date</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $expected_stay_in_date; ?></div>
                    <?php
                        }else{
                    ?>
                        <input type="text" class="form-control datepicker" name="expected_stay_in_date" id="expected_stay_in_date" tabindex="3" value="<?php echo $expected_stay_in_date; ?>" />
                    <?php
                        }
                    ?>
				</div>
				<div class="col-sm-6">
					<label>Reason for Delay</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $reason_for_delay; ?></div>
                    <?php
                        }else{
                    ?>
                        <textarea class="form-control" name="reason_for_delay" id="reason_for_delay" tabindex="7"><?php echo $reason_for_delay; ?></textarea>
                    <?php
                        }
                    ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-12">
					<input type="hidden" name="reg_profile_id" value="<?php echo $reg_profile_id; ?>"> 
					<input type="hidden" name="ep_id" value="<?php echo $ep_id; ?>"> 
					<center> <input type="submit" name="ep_register" id="ep_register" value="Submit" class="btn btn-primary" /> <input type="reset" class="btn btn-default" value="Reset"> </center>
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
