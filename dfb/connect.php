<?php
$toptext = filter_input(INPUT_POST, 'toptext');
$bottomtext = filter_input(INPUT_POST, 'bottomtext');
$submitter = filter_input(INPUT_POST, 'submitter');
if (!empty($toptext)){
if (!empty($bottomtext)){
if (!empty($submitter)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "demodeep";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO submissions (toptext, bottomtext, submitter)
values ('$toptext','$bottomtext','$submitter')";
if ($conn->query($sql)){
echo "Submitted sucessfully!";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Submitter's name cannot be empty";
die();
}
}
else{
echo "Bottom Text cannot be empty";
die();
}
}
else{
echo "Top Text cannot be empty";
die();
}
?>