<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kullanıcı yönetim paneli</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #fff;
        }

        form{
            width: 300px;
            margin-top: 50px;
            margin-right:500px;
            border-radius:5px;  
        }


        table{
            width: 850px;
            border-collapse: collapse;
            margin-top: 50px;
            margin-bottom: 50px;
            margin-left: 300px;
         }


        table th,table td{
            border: 2px solid #f3f3f3;
            text-align: center;
        }

        table tr:nth-child(odd){
            background-color:rgb(202, 192, 148);
        }

        table tr:nth-child(even){
            background-color: #fff;
        }

        table th{
            background-color:rgb(186, 169, 123) ;
            color: white;
        }
    </style>
</head>
    <body>
    <form name="kullanici_kayit" action="uyeler.php" method="GET">
    <table>
        <tr>
            <td>Kullanıcı Adı</td>
            <td><input type="text" name="kullaniciadi" value=""></td>
        </tr>
        <tr>
            <td>Üyelik Tarihi</td>
            <td><input type="date" name="uyeliktarihi" value=""></td>
        </tr>
        <tr>
            <td>Aktiflik Durumu</td>
            <td><input type="text" name="aktiflikdurumu" value=""></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="EKLE" name="K_EKLE">
                <input type="submit" value="SİL" name="K_SİL">
                <input type="submit" value="GÜNCELLE" name="K_GUNCELLE">
            </td>
        </tr>
    </table>
</form>


<?php
$b = mysqli_connect('localhost','hilalcog_userr', 'Hh1Çç8351/', 'hilalcog_urun');

if (isset($_GET['K_EKLE'])) {
    $kullaniciadi =$_GET['kullaniciadi'];
    $uyeliktarihi =$_GET['uyeliktarihi'];
    $aktiflikdurumu =$_GET['aktiflikdurumu'];

        $ekle = mysqli_query($b, "INSERT INTO uyeler VALUES ('$kullaniciadi', '$uyeliktarihi', '$aktiflikdurumu')");

}

if (isset($_GET['K_SİL'])) {
    $kullaniciadi =$_GET['kullaniciadi'];

        $sil = mysqli_query($b,"DELETE FROM uyeler WHERE kullaniciadi='$kullaniciadi' ");
}

if(isset($_GET['K_GUNCELLE'])){
    $kullaniciadi=$_GET['kullaniciadi'];
    $uyeliktarihi=$_GET['uyeliktarihi'];
    $aktiflikdurumu=$_GET['aktiflikdurumu'];


    $guncelle=mysqli_query($b,"UPDATE  uyeler set aktiflikdurumu='$aktiflikdurumu' where  kullaniciadi='$kullaniciadi' ");

}

$liste=mysqli_query($b, "SELECT * from uyeler" );
 echo"<table>";
 echo "<tr> <th>kullanıcı adı</th> <th>üyelik tarihi</th> <th>aktiflik durumu</th> </tr>";
while($sat=mysqli_fetch_row( $liste)){
    echo "<tr> <td>$sat[0]</td> <td>$sat[1]</td> <td>$sat[2]</td> </tr>";
}
 echo "</table>";

mysqli_free_result($liste);
mysqli_close($b);
?>
    </body>
</html>


