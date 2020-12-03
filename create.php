<?php

// var_dump($_POST);
// exit();

$name = $_POST['name'];
$age = $_POST['age'];
$category = $_POST['category'];
$body = $_POST['body'];


$write_data = "{$name},{$age},{$category},{$body}\n";

// var_dump($file);
// exit();

$file = fopen('data/info.csv', 'a');


flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header("Location:read.php");


// $fp = fopen('data/info.csv', 'r');
// while (($data = fgetcsv($fp)) !== FALSE) {
//   echo '<p>';
//   echo ' 名前.', $data[0];
//   echo ' 年齢：', $data[1];
//   echo ' お問い合わせ：', $data[2], $data[3];
//   echo '</p>';
// }

// fclose($fp);


// header("Location:read.php");
?>