<?php

$id=$_GET["id"];
$pwd=$_GET["pwd"];
$address=$_GET["address"];
$bd=$_GET["bd"];
$gender=$_GET["gender"];
$size=$_GET["size"];

echo "嗨！".$id."歡迎加入！！</br>";
echo "你設定的密碼要記起來喔：".$pwd."</br>";
echo "地址是：".$address."</br>";
echo "生日是：".$bd."</br></br>";

if ($gender=="male") {
	echo "正妹很多喔～ 顆顆</br>";
}else{
	echo "帥哥很多！！ > /// < </br>";
}
echo "報名理由不能亂寫喔！要認真寫的～我們會認真看的喔！！</br>寫太短趕快回到上一頁重寫 > < !!!</br></br>";

if ($size=="S") {
	echo "你選的營服尺寸是：S </br>";
}elseif ($size=="M") {
	echo "你選的營服尺寸是 : M </br>";
}elseif ($size=="L") {
	echo "你選的營服尺寸是：L </br>";
}elseif ($size=="2L") {
	echo "你選的營服尺寸是：2L </br>";
}elseif ($size=="3L") {
	echo "你選的營服尺寸是：3L </br>";
}

echo "認真檢查喔！有錯的話趕快回到上一頁</br></br>";
echo "<a href='camp.html'>上一頁</br>";

?>