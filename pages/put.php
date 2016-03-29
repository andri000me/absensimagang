<?php
INCLUDE('connection.php');

date_default_timezone_set('Asia/Jakarta');

$nim = $_POST['nim'];
$timestamp = date('Y-m-d H:i:s');;

$query = mysql_query("INSERT INTO absen VALUES('$nim', '$timestamp')") or die(mysql_error());

if ($query) {
	echo "<script>
alert('Berhasil Menginputkan Data!');
window.location.href='index.php';
</script>";
}

?>