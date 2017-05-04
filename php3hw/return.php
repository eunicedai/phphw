<?php

$Link=@mysqli_connect('localhost','root','e1e2e3','php5hw');

$id=$_POST["id"];
$pwd=$_POST["pwd"];
$address=$_POST["address"];
$bd=$_POST["bd"];
$gender=$_POST["gender"];
$why=$_POST["why"];
$hope=$_POST["hope"];
$size=$_POST["size"];

if ($Link) {
	# code...
	echo "嗨！".$id."歡迎加入！！";
}else {
	# code...
	echo "DB connected failed";
}

$result=mysqli_query($Link, "SELECT * FROM camp");
echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>";
	echo $row["id"];
	echo "</td><td>";
	echo $row["pwd"];
	echo "</td><td>";
	echo $row["address"];
	echo "</td><td>";
	echo $row["bd"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td><td>";
	echo $row["why"];
	echo "</td><td>";
	echo $row["hope"];
	echo "</td><td>";
	echo $row["size"];
	echo "</td></tr>";
}
	echo "</table>";

$sql2="INSERT INTO camp (id, pwd, address, bd, gender, why, hope, size) VALUES ('$id','$pwd','$address','$bd','$gender','$why','$hope','$size') ";
$result=mysqli_query($Link, $sql2);


mysqli_close($Link);

echo "認真檢查喔！有錯的話趕快回到上一頁</br></br>";
echo "<a href='camp.html'>上一頁</br>";

?>