<?php
//menangkap data nama dengan method POST
$nama = $_POST['nama'];
$jekel = $_POST['jenis_kelamin'];
$tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
$sekarang = new DateTime("today");
if ($tanggal_lahir > $sekarang) { 
$thn = "0";
}
$thn = $sekarang->diff($tanggal_lahir)->y;
$asalKota = @$_POST['asal_kota'];
$alamat = @$_POST['alamat'];
echo "<br>";
echo "<br>";
echo "Nama Anda adalah : " . $nama ;
echo "<br>";
echo "Jenis Kelamin Anda adalah : " . $jekel ;
echo "<br>";
echo "Umur anda adalah :".$thn;
//untuk memunculkan pekerjaan
echo "<br> Pekerjaan: ". $_POST['pekerjaan'];
//untuk memunculkan gaji 
$pekerjaan = @$_POST['pekerjaan'];
if($pekerjaan == "Programmer"){
    echo '<br> Gaji: Rp. 17.000.000,-';
}elseif($pekerjaan == "Data Scientist"){
    echo '<br> Gaji: Rp. 12.000.000,-';
}elseif($pekerjaan == "Game Developer"){
    echo '<br> Gaji: Rp. 13.000.000,-';
}elseif($pekerjaan == "UX Designer"){
    echo '<br> Gaji: Rp. 7.000.000,-';
}
echo"<br>";
echo "Asal Kota Anda adalah : " . $asalKota ;
echo "<br>";
echo "Alamat Anda adalah : " . $alamat ;
echo "<br>";