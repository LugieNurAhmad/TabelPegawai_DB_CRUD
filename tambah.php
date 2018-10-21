<html>
<!-- //created by Lugie Nur Ahmad a.k.a Liu Zhang Xie from Unknown's Guild-->
<head>
	<title>Tambah Pegawai</title>
</head>
 
<body>
	<a href="index.php">Kembali ke halaman utama</a>
	<br/><br/>
 
	<form action="tambah.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama Depan</td>
				<td><input type="text" name="nama_depan"></td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td><input type="text" name="nama_belakang"></td>
			</tr>
			<tr> 
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
            <tr> 
				<td>Jenis Kelamin</td>
				<td><select name="jenis_kelamin">
                        <option value="p"> Pria</option>
                        <option value="w">Wanita</option>
                    </select>
                </td>
			</tr>              
            <tr>
            <td>Alamat</td>
                <td>
                    <textarea name="alamat" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <td>Gaji</td>
                <td>
                    <input type="number" name="gaji" >
                </td>
            </tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$nama_depan = $_POST['nama_depan'];
		$nama_belakang = $_POST['nama_belakang'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $gaji =$_POST['gaji'];
		
		
		include_once("konfig.php");
				
		
    	$result = mysqli_query($mysqli, "INSERT INTO pegawai(nama_depan, nama_belakang, tanggal_lahir, jenis_kelamin, alamat, gaji) VALUES('$nama_depan','$nama_belakang','$tanggal_lahir','$jenis_kelamin','$alamat','$gaji')");
		
		
		echo "Pegawai berhasil ditambahkan. <a href='index.php'>Lihat Pegawai</a>";
	}
	?>
</body>
</html>