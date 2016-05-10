<?php
$servername="localhost";
$username="root"; //database admin user name
$password="";
$dbname="hong";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
echo "This file displays the data from <b>contact</b> table in <u>hong</u> database.<br/><br/>";
$sql = "SELECT id, firstname, lastname, email from contact";
$result = $conn->query($sql);

if($result->num_rows>0){
echo "<table border=\"1\"><tr><th>sid</th><th>first name</th><th>last name</th><th>email</th></tr>";
while($row=$result->fetch_assoc()){
echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"].
	"</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
}
echo "</table>";
}else{
echo "0 results";
}
$conn->close();

?>
