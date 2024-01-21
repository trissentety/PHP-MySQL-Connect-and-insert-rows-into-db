<?php
//Connect to MySQL db
include("database.php");

$user = "Patrick";
$pass = "TV";
$hashedPass = password_hash($pass, PASSWORD_DEFAULT);

//Insert row into table
$sqlInsertionSpongebob = "INSERT INTO users (user, pass) VALUES ('SpongebobSquarepants', 'gary321')";
$sqlInsertionPatrick = "INSERT INTO users (user, pass) VALUES ('$user', '$hashedPass')";

//Error handler
try {
    mysqli_query($conn, $sqlInsertionSpongebob);
    mysqli_query($conn, $sqlInsertionPatrick);
    echo "User inserted into table";
} catch (mysqli_sql_exception) {
    echo "Table insertion error";
}

// //Submit query
// mysqli_query($conn, $sql);

//Close connection
mysqli_close($conn);
