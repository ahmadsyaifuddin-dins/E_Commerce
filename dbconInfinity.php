<?php
$host = "sql208.infinityfree.com";
$tableprefix = "e_commerce_"; //You can change this table prefix, don't use white spaces, use underscores instead for example this_is_my_table_prefix_
$databasename = "if0_34535842_e_commerce";
$dbuser = "if0_34535842";
$dbpassword = "ILsrZ75lGFTSA";

$conn = mysqli_connect($host, $tableprefix, $databasename, $dbuser, $dbpassword);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
