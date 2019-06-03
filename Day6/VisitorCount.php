<?php
include('SQLConnection.php');

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$visitor_ip = getUserIpAddr();

$arr_browsers = ["Firefox", "Chrome", "Safari", "Opera", "MSIE", "Trident", "Edge"];

$agent = $_SERVER['HTTP_USER_AGENT'];

$user_browser = '';
foreach ($arr_browsers as $browser) {
	if (strpos($agent, $browser) !== false) {
	    $user_browser = $browser;
	    break;
	}
}
switch ($user_browser) {
	case 'MSIE':
		$user_browser = 'Internet Explorer';
		break;

	case 'Trident':
		$user_browser = 'Internet Explorer';
		break;

	case 'Edge':
		$user_browser = 'Internet Explorer';
		break;
}
$visitor_hour = date("h");
$visitor_minute = date("i");
$visitor_day = date("d");
$visitor_month = date("m");
$visitor_year = date("y");

echo $user_browser.'<br>';
echo $visitor_ip;
$sql = "INSERT INTO visitors_table (visitor_ip, visitor_browser, visitor_hour,
 visitor_minute, visitor_day, visitor_month, visitor_year) VALUES ('$visitor_ip', '$user_browser',
 '$visitor_hour', '$visitor_minute', '$visitor_day', '$visitor_month',
 '$visitor_year')";
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
