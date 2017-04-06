<?php
	session_start();
	$pageNo = "1";
	$pageTitle = "Loss of Passport";
	require_once("genfunctions.php");
	
	validate_login();

	require_once("common_header.php");

	$reg_profile_id = get_session("reg_profile_id");
	$ve_id = get_session("ep_id");

	$job = request_get('job');

	$sql = "SELECT * FROM `register` WHERE id = '$reg_profile_id' ";
	$res = mysql_query($sql) or die("ERR".mysql_error());
	$r = mysql_fetch_assoc($res);
    
    $passport_number = $r['passport_number'];
    $pp_country_of_issue = $r['pp_country_of_issue'];
    $pp_place_of_issue = $r['pp_place_of_issue'];
    $pp_date_of_issue = $r['pp_date_of_issue'];
    $pp_expire_date = $r['pp_expire_date'];
    $passport_brouchure = $r['passport_brouchure'];

	$reason = "";
    $job = "view";

    if(isset($_POST['lp_register']))
    {
        $lp_id = request_get("lp_id");

        $reg_profile_id = request_get("reg_profile_id");
        $reason = request_get("reason");
        $report_to_police = request_get("report_to_police");

        if($lp_id>0)
        {
            $sql = "UPDATE `loss_of_passport` SET `reg_profile_id` = '$reg_profile_id', `reason` = '$reason', `report_to_police` = '$report_to_police' WHERE id = '$lp_id' ";
            $res = mysql_query($sql) or die("ERR".mysql_error());

        }else{

            $sql = "INSERT INTO `loss_of_passport` (`id`, `reg_profile_id`, `reason`, `report_to_police`, `ts`) VALUES (NULL, '$reg_profile_id', '$reason', '$report_to_police', CURRENT_TIMESTAMP)";
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
			<h4 class="panel-title">Passport Details</h4>
		</div>
		<div class="panel-body">
        	<div class="row">
        		<div class="col-sm-4">
        			<label>Passport Number</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $passport_number; ?></div>
                    <?php
                        }else{
                    ?>
                        <input type="text" class="form-control" name="passport_number" id="passport_number" tabindex="27" value="<?php echo $passport_number; ?>" />
                    <?php
                        }
                    ?>
        		</div>
        		<div class="col-sm-4">
        			<label>Country of Issue</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo getCountriesNameById($pp_country_of_issue); ?></div>
                    <?php
                        }else{
                    ?>
                        <select class="form-control" name="pp_country_of_issue" id="pp_country_of_issue" tabindex="28"><?php echo getCountriesList($pp_country_of_issue); ?></select>
                    <?php
                        }
                    ?>
        		</div>
        		<div class="col-sm-4">
        			<label>Place of Issue</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $pp_place_of_issue; ?></div>
                    <?php
                        }else{
                    ?>
                        <input type="text" class="form-control" name="pp_place_of_issue" id="pp_place_of_issue" tabindex="29" value="<?php echo $pp_place_of_issue; ?>" />
                    <?php
                        }
                    ?>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-4">
        			<label>Date of Issue</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $pp_date_of_issue; ?></div>
                    <?php
                        }else{
                    ?>
                        <input type="text" class="form-control datepicker" name="pp_date_of_issue" id="pp_date_of_issue" tabindex="30" value="<?php echo $pp_date_of_issue; ?>" />
                    <?php
                        }
                    ?>
        		</div>
        		<div class="col-sm-4">
        			<label>Passport Brouchure</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><a href="<?php echo $passport_brouchure; ?>" target="_blank">Download</a></div>
                    <?php
                        }else{
                    ?>
                        <input type="file" class="form-control" name="passport_brouchure" id="passport_brouchure" tabindex="31" />
                    <?php
                            if($passport_brouchure!="")
                            {
                    ?>
                        <div><a href="<?php echo $passport_brouchure; ?>" target="_blank">Download</a></div>
                    <?php
                            }

                        }
                    ?>
        		</div>
        	</div>
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                    <label>Reason</label>
                    <textarea class="form-control" name="reason" id="reason" tabindex="7"><?php echo $reason; ?></textarea>
                </div>
                <div class="col-sm-6">
                    <label>Report to Police</label>
                    <textarea class="form-control" name="report_to_police" id="report_to_police" tabindex="7"><?php echo $report_to_police; ?></textarea>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-12">
                    <input type="hidden" name="reg_profile_id" value="<?php echo $reg_profile_id; ?>"> 
                    <input type="hidden" name="lp_id" value="<?php echo $lp_id; ?>"> 
                    <center> <input type="submit" name="lp_register" id="lp_register" value="Submit" class="btn btn-primary" /> <input type="reset" class="btn btn-default" value="Reset"> </center>
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
