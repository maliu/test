<?php
date_default_timezone_set('PRC'); //设置时区为中国时区
set_time_limit(0); //解决php执行时间限制，默认为30秒

//================== 测试读取amf编码 ====================
// $verPath = "./dev_1451911420_52.ver";

// //读取ver
// // $file = fopen($verPath, "rb");
// // $str = fread($file, filesize($verPath));
// // $str = gzuncompress($str);
// // $map = json_decode($str);
// // //foreach($map as $key=>$value)
// // //{
// // //	echo $key. " ". $value. "<br>";
// // //}
// // fclose($file);

// //转为bin
// $binPath = "./bin.ver";

// // $file = fopen($binPath, "wb");
// // //$str = serialize($map);
// // $str = amf3_encode($map);
// // fwrite($file, gzcompress($str));
// // fclose($file);

// //读取bin
// $file = fopen($binPath, "rb");
// $str = fread($file, filesize($binPath));
// $str = gzuncompress($str);
// //$map = unserialize($str);
// $map = amf3_decode($str);
// foreach($map as $key=>$value)
// {
// 	echo $key. " ". $value. "<br>";
// }
// fclose($file);

// echo "ok";

//===================== 测试浏览器判断 =====================


?>