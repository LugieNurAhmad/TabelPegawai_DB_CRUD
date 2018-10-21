<?php
/**
 * using mysqli_connect for database connection
 */
 //created by Lugie Nur Ahmad a.k.a Liu Zhang Xie from Unknown's Guild
$databaseHost = 'localhost';
$databaseName = 'pegawai_db';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>