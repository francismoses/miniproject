<?php
$servername = "localhost";
$username = "root";
$password = "Francis";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE Student (
REGNO BIGINT(8) PRIMARY KEY ,
FIRSTNAME VARCHAR(30) NOT NULL,
LASTNAME VARCHAR(30) NOT NULL,
DOB DATE,
DEPARTMENT VARCHAR(20),
SUB1 INT,
SUB2 INT,
SUB3 INT,
SUB4 INT,
SUB5 INT,
SUB6 INT,
SUBJECTCODE1 VARCHAR(10),
SUBJECTCODE2 VARCHAR(10),
SUBJECTCODE3 VARCHAR(10),
SUBJECTCODE4 VARCHAR(10),
SUBJECTCODE5 VARCHAR(10),
SUBJECTCODE6 VARCHAR(10),
PASSWORD VARCHAR(25),
EMAIL VARCHAR(25))";

if (mysqli_query($conn, $sql)) {
    echo "Table STUDENT created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}






// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];

//Execute the query

$sqinsert="INSERT INTO Student(FIRSTNAME,LASTNAME,DEPARTMENT,EMAIL)
				VALUES('$first_name','$last_name','$department','$email')";


if (mysqli_query($conn, $sqinsert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>