<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marker</title>
</head>
<body>

<h1>Tambah Data</h1>
  <h3>Marker</h3>
    <form action="tambahdata.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Company name</td>
                <td>:</td>                
                <td><input type="text" name="company"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td>:</td>                
                <td><textarea name="details" id="" cols="21" rows="4"></textarea></td>                
            </tr>
            <tr>
                <td>Latitude</td>
                <td>:</td>                
                <td><input type="text" name="latitude"></td>
            </tr>
            <tr>
                <td>Longitude</td>
                <td>:</td>                
                <td><input type="text" name="longitude"></td>
            </tr>
            <tr>
                <td>Telephone</td>
                <td>:</td>                
                <td><input type="text" name="telephone"></td>
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