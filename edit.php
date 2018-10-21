<?php

// //created by Lugie Nur Ahmad a.k.a Liu Zhang Xie from Unknown's Guild

include_once("konfig.php");
 
if(isset($_POST['update']))
{	
	$id_pegawai = $_POST['id_pegawai'];
	
	$nama_depan = $_POST['nama_depan'];
	$nama_belakang = $_POST['nama_belakang'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $gaji =$_POST['gaji'];
	// update user data
	$result = mysqli_query($mysqli, "UPDATE pegawai SET nama_depan='$nama_depan',nama_belakang='$nama_belakang', tanggal_lahir= '$tanggal_lahir', jenis_kelamin ='$jenis_kelamin', alamat='$alamat', gaji='$gaji' WHERE id_pegawai=$id_pegawai");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_pegawai = $_GET['id_pegawai'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pegawai WHERE id_pegawai=$id_pegawai");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama_depan = $user_data['nama_depan'];
	$nama_belakang = $user_data['nama_belakang'];
    $tanggal_lahir = $user_data['tanggal_lahir'];
    $jenis_kelamin = $user_data['jenis_kelamin'];
    $alamat = $user_data['alamat'];
    $gaji =$user_data['gaji'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
        <tr> 
				<td>Nama Depan</td>
				<td><input type="text" name="nama_depan" value=<?php echo $nama_depan;?>></td>
			</tr>
			<tr> 
				<td>Nama Belakang</td>
				<td><input type="text" name="nama_belakang" value=<?php echo $nama_belakang;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir" value=<?php echo $tanggal_lahir;?>></td>
			</tr>
            <tr> 
				<td>Jenis Kelamin</td>
				<td><select name="jenis_kelamin" value=<?php echo $jenis_kelamin;?>>
                        <option value="p"> Pria</option>
                        <option value="w">Wanita</option>
                    </select>
                </td>
			</tr>              
            <tr>
            <td>Alamat</td>
                <td>
                    <textarea name="alamat"  cols="30" rows="10" value=<?php echo $alamat?>></textarea>
                </td>
            </tr>
            <td>Gaji</td>
                <td>
            		<input type="number" name="gaji"  value=<?php echo $gaji;?>>
                </td>
            </tr>
			<tr>
				
				<td><input type="hidden" name="id_pegawai" value=<?php echo $_GET['id_pegawai'];?>></td>
				
				<td><input type="submit" name="update" value="Update"></td>
			</tr>

        <!--aku menyerah tapi harus tetap semangat
			dengan kekuatan kupu cat, gato,  猫,وقِطٌ  kau harus tetap berjuang lugie
			{\_/}
			(^_^) _
			(< <)//

			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_pegawai" value=<?php echo $_GET['id_pegawai'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
			 //created by Lugie Nur Ahmad a.k.a Liu Zhang Xie from Unknown's Guild
            -->
		</table>
	</form>
</body>
</html>