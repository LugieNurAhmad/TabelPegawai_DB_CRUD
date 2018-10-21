<?php
// include database connection file
include_once("konfig.php");
//created by Lugie Nur Ahmad a.k.a Liu Zhang Xie from Unknown's Guild 

// Get id from URL to delete that user
$id_pegawai = $_GET['id_pegawai'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM pegawai WHERE id_pegawai=$id_pegawai");
//$sql = "DELETE FROM 'pegawai' WHERE 'id_pegawai'=$id_pegawai"; 

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
