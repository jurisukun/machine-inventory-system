<?php
require_once("dbconfig.php");
$selected = $_POST['sel_mach'];
$sel_type = $_POST['type'];

$sel = "SELECT * FROM machines WHERE $sel_type='$selected';";
$query = mysqli_query($conn, $sel);
$fetch = mysqli_fetch_assoc($query);
$row = mysqli_num_rows($query);
$res = '<div>' . '<div class="select-from-click">' . $fetch["machine_id"] . '</div>'
       . '<div class="select-from-click">' . $fetch["type"] . '</div>'
       . '<div class="select-from-click">' . $fetch["description"] . '</div>'
       . '<div class="select-from-click">' . $fetch["platform"] . '</div>'
       . '<div class="select-from-click">' . $fetch["manufacturer"] . '</div>'
       . '<div class="select-from-click">' . $fetch["model_num"] . '</div>'
       . '<div class="select-from-click">' . $fetch["serial_num"] . '</div>'
       . '<div class="select-from-click">' . $fetch["date_quali"] . '</div>'
       . '<div class="select-from-click">' . $fetch["date_enroll"] . '</div>'
       . '<div class="select-from-click">' . $fetch["pkg"] . '</div>'
       . '<div class="select-from-click">' . $fetch["pl_owner"] . '</div>'
       . '<div class="select-from-click">' . $fetch["loc"] . '</div>'
       . '<div class="select-from-click">' . $fetch["ownership"] . '</div>'
       . '<div class="select-from-click">' . $fetch["area"] . '</div>'
       . '<div class="select-from-click">' . $fetch["pm_interval"] . '</div>'
       . '<div class="select-from-click">' . $fetch["control_num"] . '</div>'
       . '<div class="select-from-click">' . $fetch["pm_due"] . '</div>'
       . '<div class="select-from-click">' . $fetch["date_done"] . '</div>'
       . '<div class="select-from-click">' . $fetch["status"] . '</div>'
       . '<div class="select-from-click">' . $fetch["remarks"] . '</div>'
       . '<button id="back">Go back</button>';


echo $res = $res . '</div>';
