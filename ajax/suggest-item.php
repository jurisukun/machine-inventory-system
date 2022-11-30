<?php
require_once("dbconfig.php");
$type = $_POST["type"];

if (!empty($_POST["keyword"])) {
    if ($_POST['type'] == 0) {
        $type = "machine_id";
        $query = "SELECT * FROM machines WHERE CONCAT(machine_id,description,platform, manufacturer,model_num,serial_num,pkg,pl_owner, loc,ownership,area, pm_interval, control_num, status, remarks) like '%" . $_POST["keyword"] . "%' ORDER BY $type LIMIT 0,10";
        $result = $conn->query($query);
        $type = "0";
    } else {
        $query = "SELECT DISTINCT $type FROM machines WHERE $type like '" . $_POST["keyword"] . "%' ORDER BY $type LIMIT 0,10";
        $result = $conn->query($query);
    }

    if (mysqli_num_rows($result) > 0) {
?>
        <ul id="machine-list">

            <?php
            if ($type == "0") {
                $type = "machine_id";
                foreach ($result as $machine) { ?>
                    <li class="result">
                        <div id="<?php echo $machine['id'] ?>"><label>Machine:</label>
                            <p><?php echo $machine[$type] ?></p>
                        </div>
                        <div><label>Model:</label>
                            <p><?php echo $machine['model_num'] ?></p>
                        </div>
                        <div><label>Serial:</label>
                            <p> <?php echo $machine['serial_num'] ?></p>
                        </div>
                    </li>

                <?php } ?>


            <?php } else { ?>
                <?php foreach ($result as $machine) { ?>
                    <li class="result">
                        <div><span></span>
                            <p><?php echo $machine[$type] ?></p>
                        </div>
                    </li>

                <?php } ?>



            <?php } ?>
        </ul>
<?php  }
} ?>