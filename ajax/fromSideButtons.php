<?php
require_once("dbconfig.php");
$buttonVal = $_POST['bttnValue'];
$sql = "SELECT * FROM machines WHERE platform='$buttonVal';";
$result = mysqli_query($conn, $sql);

$row = mysqli_num_rows($result);
if ($row > 0) { ?>
  <div class="numres"> Results: <p><?php echo $row ?></p>
  </div>
  <?php
  foreach ($result as $rslt) { ?>
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