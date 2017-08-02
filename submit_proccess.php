<?php
include 'connection.php';
$email = $_POST['email'];
$url = $_POST['url'];
$question = $_POST['question'];

$sql = "INSERT INTO query (email, url, question) VALUES ('$email', '$url', '$question')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  	header('Refresh: 3; URL=http://localhost/webapp/index.php?alert=success');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	header('Refresh: 3; URL=http://localhost/webapp/index.php?alert=failed');
}

?>