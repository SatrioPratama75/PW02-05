<?php
$mod = $_REQUEST['mod'];
switch ($mod) {
    case "home":
        require("home.php");
        break;
    case "proses":
        require("proses.php");
        break;
    case "ubah":
        require("ubah.php");
        break;
    case "tambah":
        require("tambah.php");
        break;
    default:
        require("home.php");
}
?>