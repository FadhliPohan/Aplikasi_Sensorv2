<?php
include "head.php";
include "inc/koneksi.php";
$sql = "DELETE from node_1 where id='".$_GET['id']."'";
$data=mysqli_query($konek, $sql);
?>
<script>
alert("data berhasil dihapus");
location.href="perhitungan.php";
</script>

