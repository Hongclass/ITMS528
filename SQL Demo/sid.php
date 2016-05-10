
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hong";
$sid=$_GET['sid'];

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
echo "Input id is ".$sid."<br/>";
echo "<br/>";
$sql = "SELECT id, firstname, lastname, email from contact where id='".$sid."'";
$result = $conn->query($sql);

if($result->num_rows >0){
echo "<table border=\"1\"><tr><th>id</th><th>first name</th><th>last name</th><th>email</th></tr>";
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
