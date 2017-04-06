<?php
	require_once("genfunctions.php");

	$type = request_get("type");

	if($type == "getCitiesByStateId")
	{
		$stateId = request_get("state_id");
		
		try {
	       $query = "SELECT id, city_name FROM tbl_cities WHERE state_id=".$stateId;
	       $result = mysql_query($query) or die("ERR".mysql_error());
	       if(!$result) {
	         throw new exception("City not found.");
	       }
	       $res = array();
	       while($resultSet = mysql_fetch_assoc($result)) {
	        $res[$resultSet['id']] = $resultSet['city_name'];
	       }
	       $data = array('status'=>'success', 'tp'=>1, 'msg'=>"Cities fetched successfully.", 'result'=>$res);
	     } catch (Exception $e) {
	       $data = array('status'=>'error', 'tp'=>0, 'msg'=>$e->getMessage());
	     } finally {
	        echo json_encode($data);
	     }
	     


	}
?>