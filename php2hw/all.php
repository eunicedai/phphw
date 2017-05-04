<?php
	$month=$_GET["month"];
	if ($month=="Jan.") {
		echo "現在是一月";
		echo "<br>";
		echo "<img src=http://s3.narvii.com/image/zbavy3oezbb3puglmjhqajktzgx7rewt_hq.jpg>";
	}elseif ($month=="Feb.") {
		echo "現在是二月";
		echo "<br>";
		echo "<img src=http://i.imgur.com/wbZ2J.png>";
	}elseif ($month=="Mar.") {
		echo "現在是三月";
		echo "<br>";
		echo "<img src=http://pic.hanhande.com/files/120523/1283566_113558_1_lit.jpg>";
	}elseif ($month=="Apr.") {
		echo "現在是四月";
		echo "<br>";
		echo "<img src=http://img.yaojingweiba.com/uploads/allimg/150602/235T61412-5.jpg>";
	}elseif ($month=="May.") {
		echo "現在是五月";
		echo "<br>";
		echo "<img src=http://i.imgur.com/vQud9.png>";
	}elseif ($month=="Jun.") {
		echo "現在是六月";
		echo "<br>";
		echo "<img src=http://i.imgur.com/TaqIB.png>";
	}elseif ($month=="Jul.") {
		echo "現在是七月";
		echo "<br>";
		echo "<img src=http://i.imgur.com/gwq0o.png>";
	}elseif ($month=="Aug.") {
		echo "現在是八月";
		echo "<br>";
		echo "<img src=http://i.imgur.com/zCvyP.png>";
	}elseif ($month=="Sep.") {
		echo "現在是九月";
		echo "<br>";
		echo "<img src=http://blog.xuite.net/jres995118/1006118/58543322/cover600.jpg?d=600.png>";
	}elseif ($month=="Oct.") {
		echo "現在是十月";
		echo "<br>";
		echo "<img src=http://blog.xuite.net/jres995118/1006118/58543420/cover600.jpg>";
	}elseif ($month=="Nov.") {
		echo "現在是十一月";
		echo "<br>";
		echo "<img src=http://i.imgur.com/OLi7a.png>";
	}elseif ($month=="Dec.") {
		echo "現在是十二月";
		echo "<br>";
		echo "<img src=http://img.qqtz.com/2011/0426/1303824064953262.jpg>";
	}
	echo "<br>";
	echo "<br>";

	date_default_timezone_set("Asia/Taipei");
	$datetime = date("Y - m - d / H : i : s", mktime(date('H'),date('i'),date('s'),date('m'),date('d'),date('Y')));
	echo $datetime;
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "世界末日是2017年12月31號";
	echo "<br>";
	$final=mktime(0,0,0,12,31,2017);
	$now=date('U');
	$least=$final-$now;
	$day=floor(floor(floor($least/60)/60)/24);
	$hour=floor(floor($least/60)/60)%24;
	$min=floor($least/60)%60;
	$sec=$least%60;
	echo "距離世界末日剩餘：".$day."天".$hour."時".$min."分".$sec."秒";
?>