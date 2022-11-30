<?php
require_once "./dbconfig.php";
$mach = $_GET["btnVal"];
$grav = array("G6L");
$turr = array("exis200", "exis 200", "exis 250", "exis 400");
$tray = array("HEXAMAXX", "TR2000i", "TR3000i", "TR1000i");
$type = "";
$src_main = " ";
$src_other = "";
$textMain = "";
$textOther = "";
if ($mach == "gravity") {
  $type = $grav;
  $src_main = "./g6l.png";
  $src_other = "./at128s.png";
  $textMain = "G6L";
  $textOther = "AT28, AT128, MV";
}
if ($mach == "turret") {
  $type = $turr;

  $src_main = "./hsi.png";
  $src_other = "./at468.png";
  $textMain = "EXIS200, EXIS250, EXIS400";
  $textOther = "AT268, AT468, V12";
}
if ($mach == "tray") {
  $type = $tray;
  $src_main = "./vitrox3000.png";
  $src_other = "./hexa.png";
  $textMain = "TR1K, TR2K, TR3K, MAXX";
  $textOther = "HEXA SPRINT, WHIZZ";
}
$totalItems = 0;
foreach ($type as $items) {
  $sell = "SELECT COUNT(model_num) AS  perc FROM machines WHERE model_num='$items' AND LOWER(platform)='$mach';";
  $query = mysqli_query($conn, $sell);
  $fetchh = mysqli_fetch_assoc($query);
  $totalItems += $fetchh['perc'];
}

$sell2 = "SELECT COUNT(platform) AS  tot FROM machines WHERE  LOWER(platform)='$mach';";
//$sell3 = "SELECT COUNT(id) AS  num FROM mach'ines;";


$query2 = mysqli_query($conn, $sell2);
$fetchh2 = mysqli_fetch_assoc($query2);
//$query3 = mysqli_query($conn, $sell3);
//$fetchh3 = mysqli_fetch_assoc($query3);

//$type = strtoupper($mach);

$selnum = array();
array_push($selnum, $totalItems);
array_push($selnum, (int)$fetchh2['tot']);
array_push($selnum, $textMain);
array_push($selnum, $textOther);
array_push($selnum, $src_main);
array_push($selnum, $src_other);



// $selnumm[0] = $fetchh['perc'];
// $selnumm[1] = $fetchh2['tot'];

echo json_encode($selnum);
