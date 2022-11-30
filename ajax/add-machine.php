<?php
require_once "dbconfig.php";

$mach_id = $_POST['mach_id'];
//$mach_type=$_POST['mach_type'];
$mach_desc = $_POST['mach_desc'];
$mach_platform = $_POST['mach_platform'];
$mach_manufact = $_POST['mach_manufact'];
$mach_model = $_POST['mach_model'];
$mach_serial = $_POST['mach_serial'];
$mach_datequali = $_POST['mach_datequali'];
$mach_dateenroll = $_POST['mach_dateenroll'];
$mach_pkg = $_POST['mach_pkg'];
$mach_plowner = $_POST['mach_plowner'];
$mach_loc = $_POST['mach_loc'];
$mach_ownership = $_POST['mach_ownership'];
$mach_area = $_POST['mach_area'];
$mach_pminterval = $_POST['mach_pminterval'];
$mach_controlnum = $_POST['mach_controlnum'];
$mach_due = $_POST['mach_due'];
$mach_done = $_POST['mach_done'];
$mach_status = $_POST['mach_status'];
$mach_remarks = $_POST['mach_remarks'];

$ins = "INSERT INTO machines (machine_id, description, platform,manufacturer, model_num, serial_num, date_quali, date_enroll, pkg, pl_owner, loc, ownership, area, pm_interval, control_num, pm_due, date_done, status, remarks) VALUES ('$mach_id','$mach_desc','$mach_platform','$mach_manufact','$mach_model', '$mach_serial', '$mach_datequali', '$mach_dateenroll','$mach_pkg', '$mach_plowner','$mach_loc', '$mach_ownership', '$mach_area', '$mach_pminterval','$mach_controlnum', '$mach_due','$mach_done', '$mach_status', '$mach_remarks');";

if ($conn->connect_error) {
  echo '("Connection to database failed")';
} else {
  if (mysqli_query($conn, $ins)) {
    echo "1";
  } else {
    echo "-1";
  }
}
