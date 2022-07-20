<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="home.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Gudang</title>
    <script>
        
        // Insert angka ke textview
        function insert(num){
            document.form.textarea.value = document.form.textarea.value + num;
        }
    
        // Fungsi Hitung
        function equal(){
            var hasil = document.form.textarea.value;
            document.form.textarea.value = eval(hasil);
        }
    
        // Clean
        function clean(){
            document.form.textarea.value = "";
        }
    
        // Delete
        function back(){
            var hasil = document.form.textarea.value;
            document.form.textarea.value = hasil.substring(0,hasil.length-1);
        }
        </script>
</head>
<body>
    <div id="content">
        <div id="header" align="center">SISTEM INFORMASI GUDANG</div>
        <div align="center" ><img src="https://fkip.uad.ac.id/wp-content/uploads/Logo-UAD-Berwarna.png" width="100px" hight="100px" alt=""></div>
        <div id="kalkulator">
        <table border="1" width="100%">
        <tr>
            <form name="form">
                <td align="center"><input  type="text"  name="textarea"></td>
            </form>
            
        </tr>
        <tr>
            <td>
                <table align="center">
                <tr>
                    <td><button value="1" onclick="insert(1)">1</button></td>
                    <td><button value="2" onclick="insert(2)">2</button></td>
                    <td><button value="3" onclick="insert(3)">3</button></td>
                    <td><button value="+" onclick="insert('+')">+</button></td>
                </tr>
                <tr>
                    <td><button value="4" onclick="insert(4)">4</button></td>
                    <td><button value="5" onclick="insert(5)">5</button></td>
                    <td><button value="6" onclick="insert(6)">6</button></td>
                    <td><button value="-" onclick="insert('-')">-</button></td>
                </tr>
                <tr>
                    <td><button value="7" onclick="insert(7)">7</button></td>
                    <td><button value="8" onclick="insert(8)">8</button></td>
                    <td><button value="9" onclick="insert(9)">9</button></td>
                    <td><button value="x" onclick="insert('*')">x</button></td>
                </tr>
                <tr>
                    <td><button value="C" onclick="clean()">C</button></td>
                    <td><button value="0" onclick="insert(0)">0</button></td>
                    <td><button value="00" onclick="insert('00')">00</button></td>
                    <td><button value=":" onclick="insert('/')">:</button></td>
                </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center"><button value="=" onclick="equal()">enter</button></td>
        </tr>
    </table>
        </div>
        <div id="form">
        <form name="form1" method="post" action="proses.php">
				<table width="100%" border="0" align="center">
					<tr>
						<td>Jenis Barang</td>
						<td><input name="jenis" type="text" id="jenis"></td>
					</tr>

					<tr>
						<td>Merek</td>
						<td><input name="merek" type="text" id="merek"></td>
					</tr>

					<tr>
						<td>Kuantitas</td>
						<td><input name="kuantitas" type="text" id="kuantitas"></td> </tr>
					</tr>

					<tr>
						<td>Kondisi Barang</td>
						<td>
							<select name="kondisi" id="kondisi">
								<option>Baru</option>
								<option>Bekas</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Keterangan</td>
						<td><textarea name="keterangan" id="keterangan"></textarea></td> </textarea>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
        </div>
        <div id="kalender">
        <?php
            $hari	= date("d");
            $bulan	= date ("m");
            $tahun	= date("Y");
            $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
        ?>
            <table align="center" width="35%"style="border:2px solid #1E90FF">
            <tr bgcolor="#ADD8E6">
            <td align=center><font color="#FF0000">Minggu</font></td>
            <td align=center>Senin</td>
            <td align=center>Selasa</td>
            <td align=center>Rabu</td>
            <td align=center>Kamis</td>
            <td align=center>Jumat</td>
            <td align=center>Sabtu</td>
            </tr>
        <?php
            $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
            
            for ($ds=1;$ds<=$s;$ds++) {
            echo "<td></td>";
            }
            
            for ($d=1;$d<=$jumlahhari;$d++) {
            
                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
                    echo "<tr>"; 
                    }
            $warna="#000000"; // warna default
            
            if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
            echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
            if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
            }
            echo '</table>'; 
        ?>
        </div>
    </div><br>
    <center><a href="lihat.php">LIHAT GUDANG</a></center>
    <div align="center" > Adhika Nugraha Ali (2100018158) </div>
</body>
</html>