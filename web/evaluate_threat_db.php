<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "UPDATE tmoc_threat SET threat_score=".$_POST['eval_threat_score']." where threat_number=".$_POST['eval_threat_number'].";";
$result = mysqli_query($dbconn, $sql_string);
?>

<head>
  <meta http-equiv="refresh" content="0;url=http://163.152.126.96/bc/tmoc_test/evaluate" />
</head>
