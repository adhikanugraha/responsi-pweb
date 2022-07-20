<?php 
$fp = fopen("gudang.txt", "r");

echo "<table border='1'>";
echo "<tr><td>tanggal</td><td>Jenis barang</td><td>Merek</td><td>Kuantitas</td><td>Kondisi</td><td>Keterangan</td></tr>";

while ($isi = fgets($fp)){
    $pisah = explode('|', $isi);
   	echo "<tr><td>";
   	echo date('d-m-Y');
   	echo "</td><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>";

}

echo "</table>";
echo "<a href='index.php'> balik ke home</a>";

?>


    
    
    
    
    



