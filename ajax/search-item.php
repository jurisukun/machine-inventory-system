<?php
require_once("dbconfig.php");
$type = $_POST['type'];
$itm = $_POST['item'];

$sel;
if ($type == 0) {
  $sel = "SELECT * FROM machines WHERE machine_id='$itm';";
} else {
  $sel = "SELECT * FROM machines WHERE machine_id='$itm' AND type='$type';";
}
$result = mysqli_query($conn, $sel);
// if($result){
//   $fetch=mysqli_fetch_assoc($result);
//   if ($fetch>0){
//     foreach($fetch as $res){
//       echo $res['machine_id'];
//     }

//     }
//   else{
//    echo "error";
//   }

// }
$list_res = "<ul>";
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  //rintf("ID: %s  Name: %s", $row["id"], $row["name"]);
  $list_res = $list_res . "<li>['machine_id']</li>";
}
