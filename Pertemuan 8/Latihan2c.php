<HTML>
<HEAD>
<title>Koneksi Database MySQL</title>
</HEAD>
<BODY>
<h1>Koneksi database dengan mysql_fetch_array</h1>
<?php
$conn=mysqli_connect ("localhost","root","")
or die ("koneksi gagal");
mysqli_select.db($conn,"Faruq");
$hasil = mysqli_query("select * from liga",$conn);
while ($row=mysqli_fetch_array($hasil)) {
echo "Liga " .$row["negara"]; //array asosiatif
echo " mempunyai " .$row[2]; //array numeris
echo " wakil di liga champion <br>";
}
?>
</BODY>
</HTML>
