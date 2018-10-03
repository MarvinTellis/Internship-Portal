<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$connect = mysqli_connect("localhost","root","","internship");

$sql =" SELECT * FROM inhouse";

$result = mysqli_query($connect, $sql);

$json_array= array();

while ($row =mysqli_fetch_assoc($result))
 {
	# code...
	$json_array[]=$row;


}

echo json_encode($json_array);

echo '<pre>';

print_r($json_array);

echo '</pre>';
?>
</body>
</html>