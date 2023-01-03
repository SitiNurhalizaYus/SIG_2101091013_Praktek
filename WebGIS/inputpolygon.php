<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<h1>Tambah Data</h1>
   <h3>Polygon</h3>
    <form action="tambahdata3.php" method="post" enctype="multipart/form-data">
        
    <table>
            <tr>
                <td>Name</td>
                <td>:</td>                
                <td><input type="text" name="name_areas"></td>
            </tr>
            <tr>
                <td>Geolocations</td>
                <td>:</td>                
                <td><input type="text" name="geolocations_areas"></td>     
            </tr>
            <tr>
                <td></td>
                <td></td> 
                <td colspan=3><input type="submit" name="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>    
</body>
</html>