<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "insert into tmoc_attacktree(tree_number,tree_hash,tree_uploader) value ('".$_POST['tree_number']."','".$_POST['tree_hash']."','".$_POST['tree_uploader']."');";
$result = mysqli_query($dbconn, $sql_string);
?>
<head>
  <meta http-equiv="refresh" content="0;url=http://163.152.126.96/bc/tmoc_test/meta_attacktree" />
</head>