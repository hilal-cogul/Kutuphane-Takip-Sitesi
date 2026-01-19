<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ürün yönetim paneli</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        form {
            width: 400px;
            margin-top: 80px;
            margin-right: 6500px;
            border-radius: 5px;
        }

        table {
            width: 850px;
            border-collapse: collapse;
            margin-top: 60px;
            margin-bottom: 50px;
            margin-left: 250px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        table tr:nth-child(odd) {
            background-color: rgb(222, 199, 123);
        }

        table tr:nth-child(even) {
            background-color: #ffffff;
        }

        table th {
            background-color:rgb(160, 122, 25);
            color: white;
        }
    </style>
</head>
    <body>
    <form name="urun_kayıt" action="urunlerimiz.php" method="GET">
        <table>
            <tr>
                <td>ürün adı:</td>
                <td><input type="text" name="ad" value=""></td>
            </tr>
            <tr>
                <td>ürün no:</td>
                <td><input type="number" name="no" value=""></td>
            </tr>
            <tr>
                <td>stok sayısı:</td>
                <td><input type="text" name="stok" value=""></td>
            </tr>
            <tr>
                <td>ürün fiyatı:</td>
                <td><input type="text" name="fiyat" value=""></td>
            </tr>
            <tr>
                <td>ürün türü:</td>
                <td><input type="text" name="tur" value=""></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="EKLE" name="EKLE">
                    <input type="submit" value="SİL" name="SİL">
                    <input type="submit" value="GÜNCELLE" name="GUNCELLE">
                </td>
            </tr>
        </table>
    </form>

    <?php
$b = mysqli_connect('localhost', 'root', ' ', 'personel;

if (isset($_GET['EKLE'])) {
    $urunadi =$_GET['ad'];
    $urunno =$_GET['no'];
    $stoksayisi=$_GET['stok'];
    $urunfiyati =$_GET['fiyat'];
    $urunturu =$_GET['tur'];
 
        $ekle = mysqli_query($b, "INSERT INTO urunlerimiz VALUES ('$urunadi', $urunno, $stoksayisi, $urunfiyati, '$urunturu')");

    }

    if (isset($_GET['SİL'])) {
        $urunadi =$_GET['ad'];
        $urunno =$_GET['no'];
        $stoksayisi=$_GET['stok'];
        $urunfiyati =$_GET['fiyat'];
        $urunturu =$_GET['tur'];

        $sil=mysqli_query($b,"DELETE FROM urunlerimiz WHERE urunno=$urunno");
    }
     

if (isset($_GET['GUNCELLE'])) {
        $urunadi =$_GET['ad'];
        $urunno =$_GET['no'];
        $stoksayisi=$_GET['stok'];
        $urunfiyati =$_GET['fiyat'];
        $urunturu =$_GET['tur'];

    $guncelle=mysqli_query($b,"UPDATE urunlerimiz SET  stoksayisi=$stoksayisi WHERE urunno=$urunno");
}

$liste=mysqli_query($b, "SELECT * from urunlerimiz" );
echo "<table>";
echo "<tr> <th>ürün adı</th> <th>ürün no</th> <th>stok sayısı</th> <th>ürün fiyatı</th> <th>ürün türü</th> </tr>";
while($sat=mysqli_fetch_row($liste)){
    echo "<tr> <td>$sat[0]</td> <td>$sat[1]</td> <td>$sat[2]</td> <td>$sat[3]</td> <td>$sat[4]</td> </tr>";
}
echo "</table>";
    
mysqli_free_result($liste);
mysqli_close($b);
?>

    </body>
</html>



