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

//$sql = "SELECT FIRSTNAME, LASTNAME, DEPARTMENT,EMAIL FROM Student WHERE REGNO = '0' ";
$sql = "SELECT * FROM Student  WHERE FIRSTNAME = 'FRANCIS' ";
$result = mysqli_query($conn, $sql);

if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }


while($row = mysql_fetch_assoc($result)) {
      echo "EMP ID :{$row['LASTNAME']}  <br> ".
         "EMP NAME : {$row['FIRSTNAME']} <br> ".
         "EMP SALARY : {$row['DEPARTMENT']} <br> ".
         "--------------------------------<br>";
   }









/*if (mysqli_num_rows($result) > 0) {
    // output data of each row
     $row = mysqli_fetch_assoc($result)

        echo  "- Name: " . $row['FIRSTNAME']
echo "<br>";

echo "lastname - " . $row["Lastname"]. 
echo "<br>";


echo "DEPARTMENT - " . $row["DEPARTMENT"]. 
echo "<br>";


echo "MAIL - " . $row["EMAIL"]. 
echo "<br>";



} else {
    echo "0 results";
}
*/
mysqli_close($conn);
?>