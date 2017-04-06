<?php
error_reporting(0);
date_default_timezone_set("Asia/Kolkata"); 

require_once("dbcon.php");

function get_session($var)
{
	if (isset($_SESSION[$var])) {
		return $_SESSION[$var];
	}
	else {
		return '';
	}
}

function set_session($var, $value)
{
	$_SESSION[$var] = $value;
}

function unset_session($var)
{
	if(isset($_SESSION[$var])) {
		unset($_SESSION[$var]);
	}

}

function validate_login()
{
	
	if( get_session('LOGGED_IN') == '' || get_session('LOGGED_IN') == '0' )
	{
		header('Location: index.php');
		exit();
	}
	
	return;
}

function safe_sql_nq( $val )
{
	  $val = addslashes( htmlentities( $val, ENT_QUOTES, 'UTF-8') );
	  return $val;
}

function safe_sql( $val )
{
	$val = addslasher(htmlentities( $val.ENT_QUOTES, 'UTF-8') );
	return $val;
}

function request_get($param, $type = 1, $default_value = "") {
	if($type == 1){
		if(isset($_REQUEST[$param]) && trim($_REQUEST[$param]) != "") 
			return htmlentities(addslashes(trim($_REQUEST[$param])));
	}
	if($type == 2){
		return $_REQUEST[$param];
	}
	if($default_value !== "")
		return $default_value;
	
	return "";
}

function display_time_diff_format($var_date,$span_flag=0)
{
	$str_datetime = "";
	if ($var_date > 100) {
		$dateDiff = time() - $var_date;
		$fullDays = floor($dateDiff/(60*60*24));
		$fullHours = floor(($dateDiff-($fullDays*60*60*24))/(60*60));
		$fullMinutes = floor(($dateDiff-($fullDays*60*60*24)-($fullHours*60*60))/60);
		$fullSeconds = $dateDiff%60;
		
		if($fullDays == 0 && $fullHours == 0 && $fullMinutes == 0) {
			$str_datetime = $fullSeconds ." seconds ago";
		}
		else if($fullDays == 0 && $fullHours == 0) {
			$str_datetime = $fullMinutes ." minutes ago";
		}
		else if($fullDays == 0 ) {
			$str_datetime = $fullHours ." hours ago";
		}
		else if( $fullDays<30 ) {
			$str_datetime = $fullDays ." days ago";
		}
		else {
			$str_datetime = date("M j, Y H:i A", $var_date);
		}
		
		if ($span_flag == true)
		{
			$str_datetime_span_disp = date("M j, Y H:i A", $var_date);
			$temp = "<span title='$str_datetime_span_disp'>$str_datetime</span>";
			$str_datetime = $temp;
		}
		return $str_datetime;
	}
	else {
		return "--";
	}
}

function fmt_db_date_time($time_var=0)
{
	if ($time_var==0) {
		$time_var = time();
	}
	return date('Y-m-d H:i:s',$time_var);
}

function format_number($num){

	return number_format((float)$num, 2, '.', '');

}

function getWeekDates($year, $week, $start=true)
{
    $from = date("Y-m-d", strtotime("{$year}-W{$week}-1")); //Returns the date of monday in week
    $to = date("Y-m-d", strtotime("{$year}-W{$week}-7"));   //Returns the date of sunday in week
 
    if($start) {
        return $from;
    } else {
        return $to;
    }
    //return "Week {$week} in {$year} is from {$from} to {$to}.";
}

function getCurrentWeek($week, $year) {
  $dto = new DateTime();
  $result['start'] = $dto->setISODate($year, $week, 0)->format('Y-m-d');
  $result['end'] = $dto->setISODate($year, $week, 6)->format('Y-m-d');
  return $result;
}

function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return $item;
        }
    }

    return 0;
}

function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 

    // Uncomment one of the following alternatives
    // $bytes /= pow(1024, $pow);
    // $bytes /= (1 << (10 * $pow)); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
}

function formatSizeUnits($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}


function is_in_array($array, $key, $key_value){
      $within_array = '0'; // Not available
      foreach( $array as $k=>$v ){
        if( is_array($v) ){
            $within_array = is_in_array($v, $key, $key_value);
            if( $within_array == '1' ){
                break;
            }
        } else {
                if( $v == $key_value && $k == $key ){
                        $within_array = '1'; // Available
                        break;
                }
        }
      }
      return $within_array;
}

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function getLocalIP()
{
	$localIP = getHostByName(getHostName());
	return $localIP;
}


function getCountriesList($present_nationality = "0")
{
    $query = "SELECT id, countryName FROM tbl_countries ";
    $result = mysql_query($query) or die("ERR".mysql_error());
    
    $options = "<option value='0'>Select One</option>";
    while($resultSet = mysql_fetch_array($result)) 
    {
        if($present_nationality==$resultSet['id'])
            $options .= '<option value="'.$resultSet['id'].'" selected >'.$resultSet['countryName'].'</option>';
        else
            $options .= '<option value="'.$resultSet['id'].'" >'.$resultSet['countryName'].'</option>';
    }

    return $options;   
}

function getCountriesNameById($id = "0")
{
    $query = "SELECT id, countryName FROM tbl_countries where id='$id'";
    $result = mysql_query($query) or die("ERR".mysql_error());
    
    $resultSet = mysql_fetch_array($result);

    return $resultSet['countryName'];   
}

function getStatesList()
{
    $query = "SELECT id, state_name FROM tbl_states ";
    $result = mysql_query($query) or die("ERR".mysql_error());
    
    $options = "<option value='0'>Select One</option>";
    while($resultSet = mysql_fetch_array($result)) {
        $options .= '<option value="'.$resultSet['id'].'">'.$resultSet['state_name'].'</option>';
    }

    return $options;  
}


?>