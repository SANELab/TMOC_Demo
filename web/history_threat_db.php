
<?php
include('dbconn.php');
$title = 'TMOC';
$sql_string = "select threat_number, element_name, threat_contents, threat_reason, library_number, writer, threat_score from tmoc_threat;";
$result = mysqli_query($dbconn, $sql_string);

?>
<head>
  <meta http-equiv="refresh" content="0;url=http://163.152.126.96/bc/tmoc_test/history" />
</head>