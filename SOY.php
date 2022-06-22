<!DOCTYPE html>
<html>
<head>
    <title>Metode Sum of Year</title>
    <style>
  body {
   background-color: brown;
  }
</style>
</head>
<body>
    <?php
        $perolehan=null;
        $residu=null;
        $umur=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $jml_umur = 0;
            for ($i=1; $i<=$umur ; $i++) { 
                $jml_umur = $jml_umur + $i;
            }
            $hasil = ($perolehan - $residu) * $umur / $jml_umur;    
        }
    ?>
        <form class="topBefore" action="SOY.php" method="get">
            <h2><b><center> Nilai Depresiasi</center></b></h2>
            <h2><b><center> Metode Sum of Year </center></b></h2>
            <table align="center" border="0">
                <tr>
                    <td>Harga Perolehan</td>
                    <td>:</td>
                    <td><input type="text" name="perolehan" value="<?php echo $perolehan; ?>" required></td>
                </tr>
                <tr>
                    <td>Nilai Residu</td>
                    <td>:</td>
                    <td><input type="text" name="residu" value="<?php echo $residu; ?>"  required></td>
                </tr>
                <tr>
                    <td>Umur Ekonomis (Tahun)</td>
                    <td>:</td>
                    <td> <input type="text" name="umur" value="<?php echo $umur; ?>"  required></td>
                </tr>
                <tr>
                    <td><button type="submit" >Hitung</button></td>
                </tr>
                <tr>
                    <td><button type="button" onclick="location.href='index.html'">Kembali Halaman <br> Utama</button></td>
                 </tr>   
        </table>
        </form>
        <br>
        <?php
        if (isset($_GET['perolehan'])) {
            $hasil = "Hasil depresiasi menggunakan metode Sum of The Year pada tahun ke-" . $umur . " adalah " .number_format($hasil,0,',','.');
            echo "<center><h3>$hasil</h3></center>" ;
        }
        ?>
    

</body>
</html>