<?php

require_once("dbconfig.php");
$type = $_POST['search_type'];
$item = $_POST['item'];

if ($type == 0 && $item != "fromSideButtons") {
  $query = "SELECT * FROM machines WHERE CONCAT(machine_id,description,platform, manufacturer,model_num,serial_num,pkg,pl_owner, loc,ownership,area, pm_interval, control_num, status, remarks) like '%" . $_POST["item"] . "%' ORDER BY machine_id LIMIT 0,1000";
  $rs = $conn->query($query);
} else if ($item == "fromSideButtons") {
  $query = "SELECT * FROM machines WHERE platform like '%" . $type . "%'";
  $rs = $conn->query($query);
} else {
  $query = "SELECT * FROM machines WHERE $type like '" . $_POST["item"] . "%' ORDER BY $type LIMIT 0,10";
  $rs = $conn->query($query);
}


$row = mysqli_num_rows($rs);
if ($row > 0) { ?>
  <div class="numres"> Results: <p><?php echo $row ?></p>
  </div>
  <?php
  foreach ($rs as $rslt) { ?>
    <div class="search_result" id="<?php echo $rslt['id'] ?>">

      <div><label>Machine ID:</label>
        <p><?php echo $rslt['machine_id'] ?></p>
      </div>
      <div><label>Model Number:</label>
        <p><?php echo $rslt['model_num'] ?></p>
      </div>
      <div><label>Serial Number:</label>
        <p><?php echo $rslt['serial_num'] ?></p>
      </div>
    </div>
  <?php } ?>
  </div>

<?php } ?>