<?php
	session_start();
	$pageNo = "1";
	$pageTitle = "Change of Address";
	require_once("genfunctions.php");
	
	validate_login();

	require_once("common_header.php");

	$reg_profile_id = get_session("reg_profile_id");
	$ve_id = get_session("ep_id");

	$job = request_get('job');

	$sql = "SELECT * FROM `register` WHERE id = '$reg_profile_id' ";
	$res = mysql_query($sql) or die("ERR".mysql_error());
	$r = mysql_fetch_assoc($res);

	$addr_os_congo_addr1 = $r['addr_os_congo_addr1'];
	$addr_os_congo_city = $r['addr_os_congo_city'];
	$addr_os_congo_country = $r['addr_os_congo_country'];
	$rdcongo_addr_1 = $r['rdcongo_addr_1'];
	$rdcongo_addr_city = $r['rdcongo_addr_city'];
	$rdcongo_addr_phoneno = $r['rdcongo_addr_phoneno'];


	$reason_for_changing_address = "";


    if(isset($_POST['ca_register']))
    {
        $ca_id = request_get("ca_id");

        $reg_profile_id = request_get("reg_profile_id");
        $reason_for_changing_address = request_get("reason_for_changing_address");

        $addr_os_congo_addr1 = request_get("addr_os_congo_addr1"); 
        $addr_os_congo_city = request_get("addr_os_congo_city"); 
        $addr_os_congo_country = request_get("addr_os_congo_country"); 
        $rdcongo_addr_1 = request_get("rdcongo_addr_1"); 
        $rdcongo_addr_city = request_get("rdcongo_addr_city"); 
        $rdcongo_addr_phoneno = request_get("rdcongo_addr_phoneno"); 

        if($ca_id>0)
        {
            $sql = "UPDATE `change_of_address` SET `reg_profile_id` = '$reg_profile_id', `reason_for_changing_address` = '$reason_for_changing_address' WHERE id = '$ca_id' ";
            $res = mysql_query($sql) or die("ERR".mysql_error());

        }else{

            $sql = "INSERT INTO `change_of_address` (`id`, `reg_profile_id`, `reason_for_changing_address`, `ts`) VALUES (NULL, '$reg_profile_id', '$reason_for_changing_address', CURRENT_TIMESTAMP)";
            $res = mysql_query($sql) or die("ERR".mysql_error());
        }

        $sql = "UPDATE `register` SET `addr_os_congo_addr1` = '$addr_os_congo_addr1', `addr_os_congo_city` = '$addr_os_congo_city', `addr_os_congo_country` = '$addr_os_congo_country', `rdcongo_addr_1` = '$rdcongo_addr_1', `rdcongo_addr_city` = '$rdcongo_addr_city', `rdcongo_addr_phoneno` = '$rdcongo_addr_phoneno' WHERE `id`= '$reg_profile_id'";
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
			<h4 class="panel-title">Address Details</h4>
		</div>
		<div class="panel-body">
            <label>Address Outside Congo (Last Resedency)</label><hr>
        	<div class="row">
        		<div class="col-sm-3">
        			<label>Address</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $addr_os_congo_addr1; ?></div>
                    <?php
                        }else{
                    ?>
                        <textarea class="form-control" name="addr_os_congo_addr1" id="addr_os_congo_addr1" tabindex="16"><?php echo $addr_os_congo_addr1; ?></textarea>
                    <?php
                        }
                    ?>
        		</div>
        		<div class="col-sm-3">
        			<label>City</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $addr_os_congo_city; ?></div>
                    <?php
                        }else{
                    ?>
                        <input type="text" class="form-control" name="addr_os_congo_city" id="addr_os_congo_city" tabindex="17" value="<?php echo $addr_os_congo_city; ?>" />
                    <?php
                        }
                    ?>
        		</div>
        		<div class="col-sm-3">
        			<label>Country</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo getCountriesNameById($addr_os_congo_country); ?></div>
                    <?php
                        }else{
                    ?>
                        <select class="form-control" name="addr_os_congo_country" id="addr_os_congo_country" tabindex="18"><?php echo getCountriesList($addr_os_congo_country); ?></select>
                    <?php
                        }
                    ?>
        		</div>
        		<div class="col-sm-3">
        		</div>
        	</div>
            <br><label>RD Congo</label><hr>
        	<div class="row">
        		<div class="col-sm-3">
        			<label>Address</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $rdcongo_addr_1; ?></div>
                    <?php
                        }else{
                    ?>
                        <textarea class="form-control" name="rdcongo_addr_1" id="rdcongo_addr_1" tabindex="19"><?php echo $rdcongo_addr_1; ?></textarea>
                    <?php
                        }
                    ?>
        		</div>
        		<div class="col-sm-3">
        			<label>City</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $rdcongo_addr_city; ?></div>
                    <?php
                        }else{
                    ?>
                        <input type="text" class="form-control" name="rdcongo_addr_city" id="rdcongo_addr_city" tabindex="20" value="<?php echo $rdcongo_addr_city; ?>" />
                    <?php
                        }
                    ?>
        		</div>
        		<div class="col-sm-3">
        			<label>Phone No</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $rdcongo_addr_phoneno; ?></div>
                    <?php
                        }else{
                    ?>
                        <input type="text" class="form-control" name="rdcongo_addr_phoneno" id="rdcongo_addr_phoneno" tabindex="21" value="<?php echo $rdcongo_addr_phoneno; ?>" />
                    <?php
                        }
                    ?>
        		</div>
        		<div class="col-sm-3">
        		</div>
        	</div>
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                    <label>Reason for Changing Address</label>
                    <?php 
                        if($job=="view")
                        {
                    ?>
                        <div><?php echo $reason_for_changing_address; ?></div>
                    <?php
                        }else{
                    ?>
                        <textarea class="form-control" name="reason_for_changing_address" id="reason_for_changing_address" tabindex="7"><?php echo $reason_for_changing_address; ?></textarea>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-12">
                    <input type="hidden" name="reg_profile_id" value="<?php echo $reg_profile_id; ?>"> 
                    <input type="hidden" name="ca_id" value="<?php echo $ca_id; ?>"> 
                    <center> <input type="submit" name="ca_register" id="ca_register" value="Submit" class="btn btn-primary" /> <input type="reset" class="btn btn-default" value="Reset"> </center>
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
