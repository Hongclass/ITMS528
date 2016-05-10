<?php
$servername="localhost";
$username="root"; //database admin user name
$password="2300.sherman";
$dbname="itms2";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
echo "This file displays the data from <b>lee</b> table in <u>itms2</u> database.<br/><br/>";
$sql = "SELECT sid, firstname, lastname, email from lee";
$result = $conn->query($sql);

if($result->num_rows>0){
echo "<table border=\"1\"><tr><th>sid</th><th>first name</th><th>last name</th><th>email</th></tr>";
while($row=$result->fetch_assoc()){
echo "<tr><td>".$row["sid"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
}
echo "</table>";
}else{
echo "0 results";
}
$conn->close();

?>
