
<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "select tree_number, tree_hash, tree_uploader, tree_score from tmoc_attacktree;";
$result = mysqli_query($dbconn, $sql_string);

?>
<head>
  <meta http-equiv="refresh" content="0;url=http://163.152.126.96/bc/tmoc_test/history" />
</head>