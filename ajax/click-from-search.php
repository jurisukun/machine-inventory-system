<?php
require_once("dbconfig.php");
$clickedID = $_POST['clickedID'];

$sel = "SELECT * FROM machines WHERE id='$clickedID';";
$query = mysqli_query($conn, $sel);
$fetch = mysqli_fetch_assoc($query);
//$row=mysqli_num_rows($query);


// var_dump($sel);
// var_dump($fetch);
// $rr='<div> $fetch["machine_id"] </div>';


// echo $rr;
$row = mysqli_num_rows($query);
if ($row > 0) { ?>
  <div>
    <?php
    foreach ($query as $rslt) { ?>
      <h3>Machine Details</h3>
      <div class="select-from-click" id="<?php echo $rslt['id'] ?>"><label>Machine ID:</label>
        <p><?php echo $rslt['machine_id']  ?> </p>
      </div>
      <div class="select-from-click"><label>Description:</label>
        <p><?php echo $rslt['description']  ?> </p>
      </div>
      <div class="select-from-click"><label>Platform:</label>
        <p><?php echo $rslt['platform']  ?> </p>
      </div>
      <div class="select-from-click"><label>Manufacturer:</label>
        <p><?php echo $rslt['manufacturer']  ?> </p>
      </div>
      <div class="select-from-click"><label>Model Number:</label>
        <p><?php echo $rslt['model_num']  ?> </p>
      </div>
      <div class="select-from-click"><label>Serial Number:</label>
        <p><?php echo $rslt['serial_num']  ?> </p>
      </div>
      <div class="select-from-click"><label>Date Qualified:</label>
        <p><?php echo $rslt['date_quali']  ?> </p>
      </div>
      <div class="select-from-click"><label>Date Enrolled:</label>
        <p><?php echo $rslt['date_enroll']  ?> </p>
      </div>
      <div class="select-from-click"><label>PKG Config:</label>
        <p><?php echo $rslt['pkg']  ?> </p>
      </div>
      <div class="select-from-click"><label>PL Owner:</label>
        <p><?php echo $rslt['pl_owner']  ?> </p>
      </div>
      <div class="select-from-click"><label>Location:</label>
        <p><?php echo $rslt['loc']  ?> </p>
      </div>
      <div class="select-from-click"><label>Ownership:</label>
        <p><?php echo $rslt['ownership']  ?> </p>
      </div>
      <div class="select-from-click"><label>Area:</label>
        <p><?php echo $rslt['area']  ?> </p>
      </div>
      <div class="select-from-click"><label>PM Interval:</label>
        <p><?php echo $rslt['pm_interval']  ?> </p>
      </div>
      <div class="select-from-click"><label>Control Number:</label>
        <p><?php echo $rslt['control_num']  ?> </p>
      </div>
      <div class="select-from-click"><label>PM Due Date:</label>
        <p><?php echo $rslt['pm_due']  ?> </p>
      </div>
      <div class="select-from-click"><label>Date Done:</label>
        <p><?php echo $rslt['date_done']  ?> </p>
      </div>
      <div class="select-from-click"><label>Status:</label>
        <p><?php echo $rslt['status']  ?> </p>
      </div>
      <div class="select-from-click"><label>Remarks:</label>
        <p><?php echo $rslt['remarks']  ?> </p>
      </div>
      <button id="back">Go back</button>

    <?php } ?>
  </div>

<?php } ?>