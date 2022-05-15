<?php

$host = "localhost";
$username = "ict4d";
$passwd = "ICT4Dvu2022";
$dbname = "ict4d";
//get data passed from Voice Browser
$callerID = $_GET['callerID'];
$vote = $_GET['vote'];

//connect to MYSQL database
$con = mysqli_connect($host, $username, $passwd, $dbname);
if (!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

//insert data into the specific table
$sql = "INSERT INTO bipvote(caller_id, caller_vote) VALUES ('$callerID','$vote') ON DUPLICATE KEY UPDATE caller_vote=$vote";

//sanity check
if (!mysqli_query($con, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

//close database
mysqli_close($con);
?>
