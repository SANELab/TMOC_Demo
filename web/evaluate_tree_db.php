<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "UPDATE tmoc_attacktree SET tree_score=('".$_POST['eval_tree_score']."') where tree_number=('".$_POST['eval_tree_number']."');";
$result = mysqli_query($dbconn, $sql_string);

?>
<head>
  <meta http-equiv="refresh" content="0;url=http://163.152.126.96/bc/tmoc_test/evaluate" />
</head>