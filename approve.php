<?php
error_reporting(0);
$getid = $_GET["id"];
include_once 'dbConnection.php';

$sql  = "update t_status set s_stat=";
$sql .= "'Approved'";
$sql .= " where s_id='" . $getid . "'";

mysqli_query($con, $sql);
echo $sql;

?>
<html>

<body>
    <script>
        alert("Approved")
        location.href = "admin.php"
    </script>
</body>

</html>