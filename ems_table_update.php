<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EMS_PATIENT_CARE_DATABASE";

$InputNames = implode(", ", (array_keys($_POST)));
$InputValues = implode("', '", (array_values($_POST)));

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO PATIENT_MEDICAL_REPORT_TABLE($InputNames) VALUES ('$InputValues')";


if (mysqli_query($conn, $sql)) 
{
	
		echo "Patient Report Information have been submitted Successfully";
	
}
 else
{
    echo "Error submitting Patient Report Information: " . mysqli_error($conn);
}

mysqli_close($conn);
?>