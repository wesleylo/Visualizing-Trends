<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "weslo_trends";
$mysql_db_password = "password!";
$mysql_db_database = "weslo_trends";

$con = @mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password,
 $mysql_db_database);

if (!$con) {
 trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}
$var = array();
 $sql = "SELECT name, woeid, lat, lon, trend, trend_URL, tweet_volume FROM test";
$result = mysqli_query($con, $sql);

while($obj = mysqli_fetch_object($result)) {
$var[] = $obj;
}
echo json_encode($var, JSON_NUMERIC_CHECK);
?>