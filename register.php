<?php
  ob_start();
  session_start();
  $pageNo = "2";
  $pageName = "Register";
  require_once("genfunctions.php");

  require_once("common_header.php");

  error_reporting(E_ALL);
?>

<form method="post" enctype="multipart/form-data">
<?php
	
	if(isset($_POST['register']))
	{
		$reg_profile_id = request_get("reg_profile_id");
		$full_name = request_get("full_name");
		$sex = request_get("sex");
		$spouses_name = request_get("spouses_name");
		$fathers_name = request_get("fathers_name");
		$mothers_name = request_get("mothers_name");
		$dob = request_get("dob");
		$age = request_get("age");
		$email_id = request_get("email_id");
		$mobile_no = request_get("mobile_no");
		$country_of_birth = request_get("country_of_birth");
		$city_of_birth = request_get("city_of_birth");
		$height = request_get("height");
		$religion = request_get("religion");
		$present_nationality = request_get("present_nationality");

		//$photo = request_get("photo"); // file upload

		$photo = "";
		
		$upd_photo_upload_file_suc = 0;

		if(!empty($_FILES['photo']['name'])) 
		{
			$path = "uploads/";

			$cur_name = $_FILES['photo']['name'];

			if(!file_exists($path))
			{
				if (!mkdir($path, 0777, true)) {
				    die('Failed to create Path folder...');
				}
				//echo "<br>Path : ".$path." Created Successfully<br>";
			}

			$photo = $path.$cur_name;

			if(move_uploaded_file($_FILES['photo']['tmp_name'], $photo)){
				//echo "file uploaded successfully :: ".$photo." :: ";
			}
			//echo "Photo Added!";
			$upd_photo_upload_file_suc = 1;

		}

		$addr_os_congo_addr1 = request_get("addr_os_congo_addr1"); 
		$addr_os_congo_city = request_get("addr_os_congo_city"); 
		$addr_os_congo_country = request_get("addr_os_congo_country"); 
		$rdcongo_addr_1 = request_get("rdcongo_addr_1"); 
		$rdcongo_addr_city = request_get("rdcongo_addr_city"); 
		$rdcongo_addr_phoneno = request_get("rdcongo_addr_phoneno"); 

		$emergency_contact_name = request_get("emergency_contact_name"); 
		$emergency_phone_no = request_get("emergency_phone_no"); 
		$emergency_country = request_get("emergency_country"); 
		$emergency_city = request_get("emergency_city"); 
		$emergency_relationship = request_get("emergency_relationship"); 

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

		
		$visa_number = request_get("visa_number");
		$visa_country_of_issue = request_get("visa_country_of_issue");
		$visa_place_of_issue = request_get("visa_place_of_issue");
		$visa_date_of_issue = request_get("visa_date_of_issue");
		$visa_expire_date = request_get("visa_expire_date");
		$visa_validity = request_get("visa_validity");
		$visa_type = request_get("visa_type");

		//$visa_copy = request_get("visa_copy"); // file upload

		$visa_copy = "";

		$upd_visa_copy_upload_file_suc = 0;

		if(!empty($_FILES['visa_copy']['name'])) 
		{
			$path = "uploads/";

			$cur_name = $_FILES['visa_copy']['name'];

			if(!file_exists($path))
			{
				if (!mkdir($path, 0777, true)) {
				    die('Failed to create Path folder...');
				}
				//echo "<br>Path : ".$path." Created Successfully<br>";
			}

			$visa_copy = $path.$cur_name;

			if(move_uploaded_file($_FILES['visa_copy']['tmp_name'], $visa_copy)){
				//echo "file uploaded successfully :: ".$visa_copy." :: ";
			}
			//echo "Photo Added!";
			$upd_visa_copy_upload_file_suc = 1;

		}

		
		$place_of_embarkation = request_get("place_of_embarkation");
		$city_of_embarkation = request_get("city_of_embarkation");
		$country_of_embarkation = request_get("country_of_embarkation");
		$date_of_arrival = request_get("date_of_arrival");
		$mode_of_journey = request_get("mode_of_journey");
		$purpose_of_visiting_rdcongo = request_get("purpose_of_visiting_rdcongo");
		$purpose_description = request_get("purpose_description");

		//$support_document = request_get("support_document"); // file upload


		$support_document = "";

		$upd_support_document_upload_file_suc = 0;

		if(!empty($_FILES['support_document']['name'])) 
		{
			$path = "uploads/";

			$cur_name = $_FILES['support_document']['name'];

			if(!file_exists($path))
			{
				if (!mkdir($path, 0777, true)) {
				    die('Failed to create Path folder...');
				}
				//echo "<br>Path : ".$path." Created Successfully<br>";
			}

			$support_document = $path.$cur_name;

			if(move_uploaded_file($_FILES['support_document']['tmp_name'], $support_document)){
				//echo "file uploaded successfully :: ".$support_document." :: ";
			}
			//echo "support_document Added!";
			$upd_support_document_upload_file_suc = 1;

		}


		if($reg_profile_id>0)
		{

			if($upd_photo_upload_file_suc)
			{
				$sql = "UPDATE `register` SET `photo` = '$photo' WHERE `id`= '$reg_profile_id'";
				$res = mysql_query($sql) or die("ERR ".mysql_error());
			}

			if($upd_passport_brouchure_upload_file_suc)
			{					
				$sql = "UPDATE `register` SET `passport_brouchure` = '$passport_brouchure' WHERE `id`= '$reg_profile_id'";
				$res = mysql_query($sql) or die("ERR ".mysql_error());
			}

			if($upd_visa_copy_upload_file_suc)
			{					
				$sql = "UPDATE `register` SET `visa_copy` = '$visa_copy' WHERE `id`= '$reg_profile_id'";
				$res = mysql_query($sql) or die("ERR ".mysql_error());
			}

			if($upd_support_document_upload_file_suc)
			{					
				$sql = "UPDATE `register` SET `support_document` = '$support_document' WHERE `id`= '$reg_profile_id'";
				$res = mysql_query($sql) or die("ERR ".mysql_error());
			}
			
			$sql = "UPDATE `register` SET `full_name` = '$full_name', `sex` = '$sex', `spouses_name` = '$spouses_name', `fathers_name` = '$fathers_name', `mothers_name` = '$mothers_name', `dob` = '$dob', `age` = '$age', `email_id` = '$email_id', `mobile_no` = '$mobile_no', `country_of_birth` = '$country_of_birth', `city_of_birth` = '$city_of_birth', `height` = '$height', `religion` = '$religion', `present_nationality` = '$present_nationality', `addr_os_congo_addr1` = '$addr_os_congo_addr1', `addr_os_congo_city` = '$addr_os_congo_city', `addr_os_congo_country` = '$addr_os_congo_country', `rdcongo_addr_1` = '$rdcongo_addr_1', `rdcongo_addr_city` = '$rdcongo_addr_city', `rdcongo_addr_phoneno` = '$rdcongo_addr_phoneno', `emergency_contact_name` = '$emergency_contact_name', `emergency_phone_no` = '$emergency_phone_no', `emergency_country` = '$emergency_country', `emergency_city` = '$emergency_city', `emergency_relationship` = '$emergency_relationship', `passport_number` = '$passport_number', `pp_country_of_issue` = '$pp_country_of_issue', `pp_place_of_issue` = '$pp_place_of_issue', `pp_date_of_issue` = '$pp_date_of_issue', `pp_expire_date` = '$pp_expire_date', `visa_number` = '$visa_number', `visa_country_of_issue` = '$visa_country_of_issue', `visa_place_of_issue` = '$visa_place_of_issue', `visa_date_of_issue` = '$visa_date_of_issue', `visa_expire_date` = '$visa_expire_date', `visa_validity` = '$visa_validity', `visa_type` = '$visa_type', `place_of_embarkation` = '$place_of_embarkation', `city_of_embarkation` = '$city_of_embarkation', `country_of_embarkation` = '$country_of_embarkation', `date_of_arrival` = '$date_of_arrival', `mode_of_journey` = '$mode_of_journey', `purpose_of_visiting_rdcongo` = '$purpose_of_visiting_rdcongo', `purpose_description` = '$purpose_description' WHERE `id`= '$reg_profile_id'";
			$res = mysql_query($sql) or die("ERR ".mysql_error());

		}else{

			$sql = "INSERT INTO `register` (`id`, `full_name`, `sex`, `spouses_name`, `fathers_name`, `mothers_name`, `dob`, `age`, `email_id`, `mobile_no`, `country_of_birth`, `city_of_birth`, `height`, `religion`, `present_nationality`, `photo`, `addr_os_congo_addr1`, `addr_os_congo_city`, `addr_os_congo_country`, `rdcongo_addr_1`, `rdcongo_addr_city`, `rdcongo_addr_phoneno`, `emergency_contact_name`, `emergency_phone_no`, `emergency_country`, `emergency_city`, `emergency_relationship`, `passport_number`, `pp_country_of_issue`, `pp_place_of_issue`, `pp_date_of_issue`, `pp_expire_date`, `passport_brouchure`, `visa_number`, `visa_country_of_issue`, `visa_place_of_issue`, `visa_date_of_issue`, `visa_expire_date`, `visa_validity`, `visa_type`, `visa_copy`, `place_of_embarkation`, `city_of_embarkation`, `country_of_embarkation`, `date_of_arrival`, `mode_of_journey`, `purpose_of_visiting_rdcongo`, `purpose_description`, `support_document`, `status`, `ts`) VALUES (NULL, '$full_name', '$sex', '$spouses_name', '$fathers_name', '$mothers_name', '$dob', '$age', '$email_id', '$mobile_no', '$country_of_birth', '$city_of_birth', '$height', '$religion', '$present_nationality', '$photo', '$addr_os_congo_addr1', '$addr_os_congo_city', '$addr_os_congo_country', '$rdcongo_addr_1', '$rdcongo_addr_city', '$rdcongo_addr_phoneno', '$emergency_contact_name', '$emergency_phone_no', '$emergency_country', '$emergency_city', '$emergency_relationship', '$passport_number', '$pp_country_of_issue', '$pp_place_of_issue', '$pp_date_of_issue', '$pp_expire_date', '$passport_brouchure', '$visa_number', '$visa_country_of_issue', '$visa_place_of_issue', '$visa_date_of_issue', '$visa_expire_date', '$visa_validity', '$visa_type', '$visa_copy', '$place_of_embarkation', '$city_of_embarkation', '$country_of_embarkation', '$date_of_arrival', '$mode_of_journey', '$purpose_of_visiting_rdcongo', '$purpose_description', '$support_document', '0', CURRENT_TIMESTAMP)";
			$res = mysql_query($sql) or die("ERR ".mysql_error());

		}

		echo '<div class="container"><center><div class="alert alert-success">Saved Successfully!!</div></center></div>';


	}

	if(isset($_POST['ve_register']))
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
<section class="stores">

    <div class="container">

<?php

	$reg_profile_id = "";

	// Registration

	$full_name = "";
	$dob = "";
	$height = "";
	$sex = "";

	$spouses_name = "";
	$age = "";
	$religion = "";
	$email_id = "";

	$photo = "";

	$fathers_name = "";
	$country_of_birth = "";
	$present_nationality = "0";
	$mobile_no = "";

	$mothers_name = "";
	$city_of_birth = "";

	$addr_os_congo_addr1 = "";
	$addr_os_congo_city = "";
	$addr_os_congo_country = "";

	$rdcongo_addr_1 = "";
	$rdcongo_addr_city = "";
	$rdcongo_addr_phoneno = "";

	$emergency_contact_name = "";
	$emergency_relationship = "";
	$emergency_phone_no = "";
	$emergency_country = "";
	$emergency_city = "";

	$passport_number = "";
	$pp_country_of_issue = "";
	$pp_place_of_issue = "";
	$pp_date_of_issue = "";
	$pp_expire_date = "";
	$passport_brouchure = "";

	$visa_number = "";
	$visa_country_of_issue = "";
	$visa_place_of_issue = "";
	$visa_date_of_issue = "";
	$visa_expire_date = "";
	$visa_validity = "";
	$visa_type = "";
	$visa_copy = "";

	$place_of_embarkation = "";
	$city_of_embarkation = "";
	$country_of_embarkation = "";
	$date_of_arrival = "";
	$mode_of_journey = "";
	$purpose_of_visiting_rdcongo = "";
	$purpose_description = "";
	$support_document = "";

	$viewName = request_get("view");
	$job = request_get("job");

	// Visa Extenstion

	$ve_id = "";
	$have_you_visiting_rdcongo_before = "";
	$if_yes_year = "";
	$date_from = "";
	$date_to = "";
	$reason_for_ext = "";

	// Exit Permit

	$ep_id = "0";
	$departure_date = "";
	$expected_stay_in_date = "";
	$reason_for_delay = "";

	// loss_of_passport

	$lp_id = "0";
	$reason = "";
	$report_to_police = "";

	if($viewName == "registration")
	{

		if($job=="edit" || $job=="view")
		{
			
			$reg_profile_id = request_get("id");
			
			$sql = "SELECT * FROM `register` WHERE id='".$reg_profile_id."' "; 
			$res = mysql_query($sql) or die("ERR".mysql_error());

			$r = mysql_fetch_assoc($res);

			$full_name = $r['full_name'];
			$sex = $r['sex'];
			$spouses_name = $r['spouses_name'];
			$fathers_name = $r['fathers_name'];
			$mothers_name = $r['mothers_name'];
			$dob = $r['dob'];
			$age = $r['age'];
			$email_id = $r['email_id'];
			$mobile_no = $r['mobile_no'];
			$country_of_birth = $r['country_of_birth'];
			$city_of_birth = $r['city_of_birth'];
			$height = $r['height'];
			$religion = $r['religion'];
			$present_nationality = $r['present_nationality'];
			$photo = $r['photo'];
			$addr_os_congo_addr1 = $r['addr_os_congo_addr1'];
			$addr_os_congo_city = $r['addr_os_congo_city'];
			$addr_os_congo_country = $r['addr_os_congo_country'];
			$rdcongo_addr_1 = $r['rdcongo_addr_1'];
			$rdcongo_addr_city = $r['rdcongo_addr_city'];
			$rdcongo_addr_phoneno = $r['rdcongo_addr_phoneno'];
			$emergency_contact_name = $r['emergency_contact_name'];
			$emergency_phone_no = $r['emergency_phone_no'];
			$emergency_country = $r['emergency_country'];
			$emergency_city = $r['emergency_city'];
			$emergency_relationship = $r['emergency_relationship'];
			$emergency_relationship = $r['emergency_relationship'];
			$passport_number = $r['passport_number'];
			$pp_country_of_issue = $r['pp_country_of_issue'];
			$pp_place_of_issue = $r['pp_place_of_issue'];
			$pp_date_of_issue = $r['pp_date_of_issue'];
			$pp_expire_date = $r['pp_expire_date'];
			$passport_brouchure = $r['passport_brouchure'];
			$visa_number = $r['visa_number'];
			$visa_country_of_issue = $r['visa_country_of_issue'];
			$visa_place_of_issue = $r['visa_place_of_issue'];
			$visa_date_of_issue = $r['visa_date_of_issue'];
			$visa_expire_date = $r['visa_expire_date'];
			$visa_validity = $r['visa_validity'];
			$visa_type = $r['visa_type'];
			$visa_copy = $r['visa_copy'];
			$place_of_embarkation = $r['place_of_embarkation'];
			$city_of_embarkation = $r['city_of_embarkation'];
			$country_of_embarkation = $r['country_of_embarkation'];
			$date_of_arrival = $r['date_of_arrival'];
			$mode_of_journey = $r['mode_of_journey'];
			$purpose_of_visiting_rdcongo = $r['purpose_of_visiting_rdcongo'];
			$purpose_description = $r['purpose_description'];
			$support_document = $r['support_document'];

		}
?>
		<div class="letters">
            <h3>Personal Details</h3>
            <ul class="row">
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Full Name*</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $full_name; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="full_name" id="full_name" required tabindex="1" value="<?php echo $full_name; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
                  	<label>Date of Birth*</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $dob; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control datepicker" name="dob" id="dob" required tabindex="5" value="<?php echo $dob; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
					<label>Height</label>
					<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $height; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="height" id="height" tabindex="9" value="<?php echo $height; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
					<label>Sex</label>
					<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $sex; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<select class="form-control" name="sex" id="sex" tabindex="13">
	                  		<option value="0" <?php if($sex=="0") echo "selected"; ?> >Select One</option>
	                  		<option value="MALE" <?php if($sex=="MALE") echo "selected"; ?> >MALE</option>
	                  		<option value="FEMALE" <?php if($sex=="FEMALE") echo "selected"; ?> >FEMALE</option>
	                  		<option value="OTHERS" <?php if($sex=="OTHERS") echo "selected"; ?> >OTHERS</option>
	                  	</select>
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Spouse's Name</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $spouses_name; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="spouses_name" id="spouses_name" tabindex="2" value="<?php echo $spouses_name; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
                  	<label>Age</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $age; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="age" id="age" tabindex="6" value="<?php echo $age; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
                  	<label>Religion</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $religion; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="religion" id="religion" tabindex="10" value="<?php echo $religion; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
					<label>Email Id*</label>
					<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $email_id; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="email_id" id="email_id" required tabindex="14" value="<?php echo $email_id; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Father's Name</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $fathers_name; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="fathers_name" id="fathers_name" tabindex="3" value="<?php echo $fathers_name; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
                  	<label>Country of Birth</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo getCountriesNameById($country_of_birth); ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<select class="form-control" name="country_of_birth" id="country_of_birth" tabindex="7"><?php echo getCountriesList($country_of_birth); ?></select>
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
                  	<label>Present Nationality</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo getCountriesNameById($present_nationality); ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<select class="form-control" name="present_nationality" id="present_nationality" tabindex="11"><?php echo getCountriesList($present_nationality); ?></select>
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
					<label>Mobile No</label>
					<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $mobile_no; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="mobile_no" id="mobile_no" tabindex="15" value="<?php echo $mobile_no; ?>" >
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Mother's Name</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $mothers_name; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="mothers_name" id="mothers_name" tabindex="4" value="<?php echo $mothers_name; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
                  	<label>City of Birth</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $city_of_birth; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="city_of_birth" id="city_of_birth" tabindex="8" value="<?php echo $city_of_birth; ?>">
                  	<?php
                  		}
                  	?>
                  </li>
                  <li>
                  	<label>Photo</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><img src="<?php echo $photo; ?>" width="100px" width="100px" /></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="file" class="form-control" name="photo" id="photo" tabindex="12">
                  	<?php
                  			if($photo!="")
                  			{
                  	?>
                  		<div><img src="<?php echo $photo; ?>" width="100px" width="100px" /></div>
                  	<?php
                  			}

                  		}
                  	?>
                  </li>
                </ul>
              </li>
            </ul>
        </div>

        <div class="letters">
            <h3>Address Details</h3>
            <ul class="row">
              <li><label>Address Outside Congo (Last Resedency)</label><hr></li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li></li>
                </ul>
              </li>
            </ul>
            <ul class="row">
              <li><label>RD Congo</label><hr></li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li></li>
                </ul>
              </li>
            </ul>
            <ul class="row">
              <li><label>Emergency Contact Details</label><hr></li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Contact Name</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $emergency_contact_name; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="emergency_contact_name" id="emergency_contact_name" tabindex="22" value="<?php echo $emergency_contact_name; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Phone No</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $emergency_phone_no; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="emergency_phone_no" id="emergency_phone_no" tabindex="23" value="<?php echo $emergency_phone_no; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-2">
                <ul class="link-letter no-border">
                  <li>
					<label>Country</label>
					<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo getCountriesNameById($emergency_country); ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<select class="form-control" name="emergency_country" id="emergency_country" tabindex="24"><?php echo getCountriesList($emergency_country); ?></select>
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-2">
                <ul class="link-letter no-border">
                  <li>
                  	<label>City</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $emergency_city; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="emergency_city" id="emergency_city" tabindex="25" value="<?php echo $emergency_city; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-2">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Relationship</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $emergency_relationship; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="emergency_relationship" id="emergency_relationship" tabindex="26" value="<?php echo $emergency_relationship; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
            </ul>
        </div>

        <div class="letters">
            <h3>Passport Details</h3>
            <ul class="row">
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Passport Number*</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $passport_number; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="passport_number" id="passport_number" required tabindex="27" value="<?php echo $passport_number; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-2">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-2">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-2">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
            </ul>
        </div>

        <div class="letters">
            <h3>Visa Details</h3>
            <ul class="row">
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Visa Number*</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $visa_number; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="visa_number" id="visa_number" required tabindex="32" value="<?php echo $visa_number; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Country of Issue</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo getCountriesNameById($visa_country_of_issue); ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<select class="form-control" name="visa_country_of_issue" id="visa_country_of_issue" tabindex="33"><?php echo getCountriesList($visa_country_of_issue); ?></select>
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Place of Issue</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $visa_place_of_issue; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="visa_place_of_issue" id="visa_place_of_issue" tabindex="34" value="<?php echo $visa_place_of_issue; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Date of Issue</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $visa_date_of_issue; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control datepicker" name="visa_date_of_issue" id="visa_date_of_issue" tabindex="35" value="<?php echo $visa_date_of_issue; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Visa Expire Date</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $visa_expire_date; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control datepicker" name="visa_expire_date" id="visa_expire_date" tabindex="36" value="<?php echo $visa_expire_date; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Visa Validity</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $visa_validity; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="visa_validity" id="visa_validity" tabindex="37" value="<?php echo $visa_validity; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Visa Type</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $visa_type; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="visa_type" id="visa_type" tabindex="38" value="<?php echo $visa_type; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Visa Copy</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><a href="<?php echo $visa_copy; ?>" target="_blank">Download</a></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="file" class="form-control" name="visa_copy" id="visa_copy" tabindex="39" value="<?php echo $visa_copy; ?>" />
                  	<?php
                  			if($visa_copy!="")
                  			{
                  	?>
                  		<div><a href="<?php echo $visa_copy; ?>" target="_blank">Download</a></div>
                  	<?php
                  			}

                  		}
                  	?>
                  </li>
                </ul>
              </li>
            </ul>
        </div>

        <div class="letters">
            <h3>Arrival in RDCongo</h3>
            <ul class="row">
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Place of Embarkation</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $place_of_embarkation; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="place_of_embarkation" id="place_of_embarkation" tabindex="40" value="<?php echo $place_of_embarkation; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Country of Embarkation</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo getCountriesNameById($country_of_embarkation); ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<select class="form-control" name="country_of_embarkation" id="country_of_embarkation" tabindex="41"><?php echo getCountriesList($country_of_embarkation); ?></select>
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>City of Embarkation</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $city_of_embarkation; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="city_of_embarkation" id="city_of_embarkation" tabindex="42" value="<?php echo $city_of_embarkation; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Date of Arrival</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $date_of_arrival; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control datepicker" name="date_of_arrival" id="date_of_arrival" tabindex="43" value="<?php echo $date_of_arrival; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Mode of Journey</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $mode_of_journey; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="mode_of_journey" id="mode_of_journey" tabindex="44" value="<?php echo $mode_of_journey; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Purpose of Visiting RD congo</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $purpose_of_visiting_rdcongo; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="purpose_of_visiting_rdcongo" id="purpose_of_visiting_rdcongo" tabindex="45" value="<?php echo $purpose_of_visiting_rdcongo; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Purpose Description</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $purpose_description; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="purpose_description" id="purpose_description" tabindex="46" value="<?php echo $purpose_description; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Support Document</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><a href="<?php echo $support_document; ?>" target="_blank">Download</a></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="file" class="form-control" name="support_document" id="support_document" tabindex="47" value="<?php echo $support_document; ?>" />
                  	<?php
                  			if($support_document!="")
                  			{
                  	?>
                  		<div><a href="<?php echo $support_document; ?>" target="_blank">Download</a></div>
                  	<?php
                  			}

                  		}
                  	?>
                  </li>
                </ul>
              </li>
            </ul>
        </div>

        <center>
        	<?php 
          		if($job=="view")
          		{
          	?>
	        	<input type="reset" name="cancel" id="cancel" value="Cancel" class="btn btn-default" tabindex="49" /> 
          	<?php
          		}else{
          	?>
	        	<input type="hidden" name="reg_profile_id" id="reg_profile_id" value="<?php echo $reg_profile_id; ?>" /> 
	        	<input type="submit" name="register" id="register" value="Register" class="btn btn-primary" tabindex="48" /> 
	        	<input type="reset" name="cancel" id="cancel" value="Cancel" class="btn btn-default" tabindex="49" /> 
          	<?php
          		}
          	?>
        </center>
<?php
	}else if($viewName == "visa_extension"){

		if($job=="edit" || $job=="view")
		{
			$ve_id = request_get("id");
			
			$sql = "SELECT * FROM `visa_extension` WHERE id='".$ve_id."' "; 
			$res = mysql_query($sql) or die("ERR".mysql_error());

			$r = mysql_fetch_assoc($res);

			$reg_profile_id = $r['reg_profile_id'];
			$have_you_visiting_rdcongo_before = $r['have_you_visiting_rdcongo_before'];
			$if_yes_year = $r['if_yes_year'];
			$date_from = $r['date_from'];
			$date_to = $r['date_to'];
			$reason_for_ext = $r['reason_for_ext'];

		}

?>
		
		<div class="letters">
            <h3>Visa Extension</h3>
            <ul class="row">
              <li class="col-sm-4">
                <ul class="link-letter">
                  <li>
                  	<label>Register Number</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $reg_profile_id; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="reg_profile_id" id="reg_profile_id" tabindex="1" value="<?php echo $reg_profile_id; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-4">
                <ul class="link-letter">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-4">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-4">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-4">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-4">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
            </ul>
        </div>

        <center>
        	<?php 
          		if($job=="view")
          		{
          	?>
	        	<input type="reset" name="cancel" id="cancel" value="Cancel" class="btn btn-default" tabindex="8" /> 
          	<?php
          		}else{
          	?>
	        	<input type="hidden" name="ve_id" id="ve_id" value="<?php echo $ve_id; ?>" /> 
	        	<input type="submit" name="ve_register" id="ve_register" value="Register" class="btn btn-primary" tabindex="8" /> 
	        	<input type="reset" name="cancel" id="cancel" value="Cancel" class="btn btn-default" tabindex="9" /> 
          	<?php
          		}
          	?>
        </center>

<?php
	}else if($viewName == "exit_permit"){

		if($job=="edit" || $job=="view")
		{
			$ep_id = request_get("id");
			
			$sql = "SELECT * FROM `exit_permit` WHERE id='".$ep_id."' "; 
			$res = mysql_query($sql) or die("ERR".mysql_error());

			$r = mysql_fetch_assoc($res);

			$reg_profile_id = $r['reg_profile_id'];
			$departure_date = $r['departure_date'];
			$expected_stay_in_date = $r['expected_stay_in_date'];
			$reason_for_delay = $r['reason_for_delay'];

		}

?>
		
		<div class="letters">
            <h3>Exit Permit</h3>
            <ul class="row">
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Register Number</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $reg_profile_id; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="reg_profile_id" id="reg_profile_id" tabindex="1" value="<?php echo $reg_profile_id; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
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
                  </li>
                </ul>
              </li>
            </ul>
        </div>

        <center>
        	<?php 
          		if($job=="view")
          		{
          	?>
	        	<input type="reset" name="cancel" id="cancel" value="Cancel" class="btn btn-default" tabindex="8" /> 
          	<?php
          		}else{
          	?>
	        	<input type="hidden" name="ep_id" id="ep_id" value="<?php echo $ep_id; ?>" /> 
	        	<input type="submit" name="ep_register" id="ep_register" value="Register" class="btn btn-primary" tabindex="8" /> 
	        	<input type="reset" name="cancel" id="cancel" value="Cancel" class="btn btn-default" tabindex="9" /> 
          	<?php
          		}
          	?>
        </center>


<?php
	}else if($viewName == "loss_of_passport"){

		if($job=="edit" || $job=="view")
		{
			$lp_id = request_get("id");
			
			$sql = "SELECT * FROM `loss_of_passport` WHERE id='".$lp_id."' "; 
			$res = mysql_query($sql) or die("ERR".mysql_error());

			$r = mysql_fetch_assoc($res);

			$reg_profile_id = $r['reg_profile_id'];
			$reason = $r['reason'];
			$report_to_police = $r['report_to_police'];

		}

?>
		
		<div class="letters">
            <h3>Loss of Passport</h3>
            <ul class="row">
              <li class="col-sm-3">
                <ul class="link-letter">
                  <li>
                  	<label>Register Number</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $reg_profile_id; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<input type="text" class="form-control" name="reg_profile_id" id="reg_profile_id" tabindex="1" value="<?php echo $reg_profile_id; ?>" />
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>              
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Reason for Delay</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $reason; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<textarea class="form-control" name="reason" id="reason" tabindex="2"><?php echo $reason; ?></textarea>
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul class="link-letter no-border">
                  <li>
                  	<label>Report to Police</label>
                  	<?php 
                  		if($job=="view")
                  		{
                  	?>
                  		<div><?php echo $report_to_police; ?></div>
                  	<?php
                  		}else{
                  	?>
                  		<textarea class="form-control" name="report_to_police" id="report_to_police" tabindex="3"><?php echo $report_to_police; ?></textarea>
                  	<?php
                  		}
                  	?>
                  </li>
                </ul>
              </li>
            </ul>
        </div>

        <center>
        	<?php 
          		if($job=="view")
          		{
          	?>
	        	<input type="reset" name="cancel" id="cancel" value="Cancel" class="btn btn-default" tabindex="4" /> 
          	<?php
          		}else{
          	?>
	        	<input type="hidden" name="lp_id" id="lp_id" value="<?php echo $lp_id; ?>" /> 
	        	<input type="submit" name="lp_register" id="lp_register" value="Register" class="btn btn-primary" tabindex="4" /> 
	        	<input type="reset" name="cancel" id="cancel" value="Cancel" class="btn btn-default" tabindex="5" /> 
          	<?php
          		}
          	?>
        </center>

<?php
	}
?>

    </div>
  </section>

</form>

<?php
  require_once("common_footer.php");
?>
<script type="text/javascript">

	$(document).ready(function(){

		$(".datepicker").datepicker({format: 'yyyy-mm-dd'});

	});

</script>