<?php
// //created by Lugie Nur Ahmad a.k.a Liu Zhang Xie from Unknown's Guild

include_once("konfig.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM pegawai ORDER BY id_pegawai DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="tambah.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama Depan</th> <th>Nama Belakang</th> <th>Tanggal Lahir</th> <th>Jenis Kelamin</th> <th>Alamat</th> <th>Gaji</th><th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama_depan']."</td>";
        echo "<td>".$user_data['nama_belakang']."</td>";
        echo "<td>".$user_data['tanggal_lahir']."</td>";    
        echo "<td>".$user_data['jenis_kelamin']."</td>";   
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['gaji']."</td>";   
        echo "<td><a href='edit.php?id_pegawai=$user_data[id_pegawai]'>Edit</a> | <a href='delete.php?id_pegawai=$user_data[id_pegawai]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>

<!-- //created by Lugie Nur Ahmad a.k.a Liu Zhang Xie from Unknown's Guild-->
</html>