<?php
	session_start();
	$pageNo = "1";
	$pageTitle = "Change of Passport";
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

    if(isset($_POST['cp_register']))
    {
        $cp_id = request_get("cp_id");

        $reg_profile_id = request_get("reg_profile_id");
        $reason = request_get("reason");

        $passport_number = request_get("passport_number"); 
        $pp_country_of_issue = request_get("pp_country_of_issue"); 
        $pp_place_of_issue = request_get("pp_place_of_issue"); 
        $pp_date_of_issue = request_get("pp_date_of_issue"); 
        $pp_expire_date = request_get("pp_expire_date"); 

        //$passport_brouchure = request_get("passport_brouchure");  // file upload

        $passport_brouchure = "";

        $upd_passport_brouchure_upload_file_suc = 0;

        if(!empty($_FILES['passport_brouchure']['name'])) 
        {
            $path = "uploads/";

            $cur_name = $_FILES['passport_brouchure']['name'];

            if(!file_exists($path))
            {
                if (!mkdir($path, 0777, true)) {
                    die('Failed to create Path folder...');
                }
                //echo "<br>Path : ".$path." Created Successfully<br>";
            }

            $passport_brouchure = $path.$cur_name;

            if(move_uploaded_file($_FILES['passport_brouchure']['tmp_name'], $passport_brouchure)){
                //echo "file uploaded successfully :: ".$passport_brouchure." :: ";
            }
            //echo "Photo Added!";
            $upd_passport_brouchure_upload_file_suc = 1;

        }

        if($cp_id>0)
        {
            $sql = "UPDATE `change_of_passport` SET `reg_profile_id` = '$reg_profile_id', `reason` = '$reason' WHERE id = '$ca_id' ";
            $res = mysql_query($sql) or die("ERR".mysql_error());

        }else{

            $sql = "INSERT INTO `change_of_passport` (`id`, `reg_profile_id`, `reason`, `ts`) VALUES (NULL, '$reg_profile_id', '$reason', CURRENT_TIMESTAMP)";
            $res = mysql_query($sql) or die("ERR".mysql_error());
        }

        if($upd_passport_brouchure_upload_file_suc)
        {                   
            $sql = "UPDATE `register` SET `passport_brouchure` = '$passport_brouchure' WHERE `id`= '$reg_profile_id'";
            $res = mysql_query($sql) or die("ERR ".mysql_error());
        }

        $sql = "UPDATE `register` SET `passport_number` = '$passport_number', `pp_country_of_issue` = '$pp_country_of_issue', `pp_place_of_issue` = '$pp_place_of_issue', `pp_date_of_issue` = '$pp_date_of_issue', `pp_expire_date` = '$pp_expire_date' WHERE `id`= '$reg_profile_id'";
        $res = mysql_query($sql) or die("ERR ".mysql_error());

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
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $reason; ?></div>
                    <?php
                        }else{
                    ?>
                        <textarea class="form-control" name="reason" id="reason" tabindex="7"><?php echo $reason; ?></textarea>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-12">
                    <input type="hidden" name="reg_profile_id" value="<?php echo $reg_profile_id; ?>"> 
                    <input type="hidden" name="cp_id" value="<?php echo $cp_id; ?>"> 
                    <center> <input type="submit" name="cp_register" id="cp_register" value="Submit" class="btn btn-primary" /> <input type="reset" class="btn btn-default" value="Reset"> </center>
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
