
<?php

// $fp = fopen('data/info.csv', 'r');
// while (($data = fgetcsv($fp)) !== FALSE) {
//   echo '<p>';
//   echo ' 名前.', $data[0];
//   echo ' 年齢：', $data[1];
//   echo ' お問い合わせ：', $data[2], $data[3];
//   echo '</p>';
// }

// fclose($fp);




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


<h1>お問い合わせ内容</h1>

<?=
$fp = fopen('data/info.csv', 'r');
while (($data = fgetcsv($fp)) !== FALSE) {
  echo '<p>';
  echo ' 名前.', $data[0];
  echo ' 年齢：', $data[1];
  echo ' お問い合わせ：', $data[2], $data[3];
  echo '</p>';
}

fclose($fp);


?>
  
</body>
</html>


