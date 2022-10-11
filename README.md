# SIG_2101091013 Praktek
Tutorial Latihan :
- [Modul 1](README.md#modul-1) Maps API
- [Modul 2](README.md#modul-2) Marker (Vector Point)
- [Modul 3](README.md#modul-3) Tooltip dan Pop Up (Info Window)
- [Modul 4](README.md#modul-4) Polyline (Vector Garis)
- [Modul 5](README.md#modul-5) Polygon

## Modul 1
# `Maps API` 
## Tugas 1 : Lakukan Proses Instalasi
**Langkah 1** : Download dokumnentasi Leaftjs pada alamat  (https://leafletjs.com/reference-1.7.1.html) dan PostGIS pda alamat
(https://postgis.net/stuff/postgis-3.0.pdf)

**Langkah 2** : Download text editor Sublime Text pada alamat (https://www.sublimetext.com/3) atau Visual Code pada alamat (https://code.visualstudio.com/download)

**Langkah 3** : Lakukan registrasi untuk mendapatkan private map API KEY di (https://account.mapbox.com/) . Fungsi dari private API KEY ini adalah sebagai kunci anda untuk customisasi peta pada domain atau aplikasi tertentu. Contoh API Key adalah (pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N 
3gifQ.rJcFIG214AriISLbB6B5aw)

**Langkah 4** : Download leafletJS dan extract file download tersebut. Hasil extract sebagai berikut. Perhatikan file leaflet.css dan leaflet.js

Leaflet.css merupakan code stylesheet atau sebagai tampilan/ desain map. Sedangkan leaflet.js berfungsi sebagai library JavaScript Map yang dapat menjalankan fungsi-fungsi API Map

## Tugas 2 : Tampilkan Peta Sederhana Menggunakan Leaflet JS
**Langkah 1** : Buka Text Dditor, Kemudian pilih menu create new file, berinama file “peta1.html”

**Langkah 2** : Tulis Format HTML
```html
<!DOCTYPE html>
<html>
<head>
    <title>Peta Pertamaku</title>
</head>
<body>

</body>
</html>
```

**Langkah 3** : Panggil CSS dan JavaScript (JS) pada header HTML, Tambahkan div id dengan nama “mapku” pada body html. Lengkapi atribute width dan height agar peta memiliki ukuran tertentu
```html
<!DOCTYPE html>
<html>
<head>
    <title>Peta Pertamaku</title>
    <link rel="stylesheet" href="../leaflet/leaflet.css"/>
    <script src="../leaflet/leaflet.js"></script>
</head>
<body>
    <div id="mapku" style="width: 100%; height: 600px;"></div>
</body>
</html>
```

**Langkah 4** : Tentukan titik awal kamera pada peta agar mendapatkan titik tengah peta. Gunakan fungsi setView untuk titik awal kamera/center view. Kemudian berikan nilai latitude, langitude dan zoom sebagai koordinat center view.
```html
<!DOCTYPE html>
<html>
<head>
  <title>Peta Pertamaku</title>
  <link rel="stylesheet" href="../leaflet/leaflet.css"/>
  <script src="../leaflet/leaflet.js"></script>
</head>
<body>
  <div id="mapku" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
  var mymap = L.map('mapku').setView([-0.9142997125961476,100.46607589539128], 13);
</script>
</html>
```

**Langkah 5** : Masukan tile layer yang berisi base map/ citra yang akan digunakan. Pada Mapbox dapat dilakukan dengan mengisi access tokennya dengan access  token sebagai berikut
```html
<!DOCTYPE html>
<html>
<head>
  <title>Peta Pertamaku</title>
  <link rel="stylesheet" href="../leaflet/leaflet.css"/>
  <script src="../leaflet/leaflet.js"></script>
</head>
<body>
  <div id="mapku" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
  var mymap = L.map('mapku').setView([-0.9142997125961476,100.46607589539128], 13);
  var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(mymap);
</script>
</html>
```

**Langkah 6** : Double klik file “peta1.html” pada folder/ tempat penyimpanan yang telah diatur sebelumnya.

Berikut hasil dari baris kode pada browser:
![M1_1](https://user-images.githubusercontent.com/114122090/195171963-ccf578c7-d345-47f7-9c90-74ceec6a007d.png)

## Modul 2
# `Marker (Vector Point)`
## Tugas 1 : Tampilkan marker pada sebuah peta
**Langkah 1** : Buatlah 1 buah file html dengan nama peta2 .html
```html
<!DOCTYPE html>
<html>
<head>
    <title>Marker</title>
</head>
<body>

</body>
</html>
```

**Langkah 2** : Gunakan kode dasar yang sama dengan pertemuan sebelumnya, yang terdiri dari maps api, koordinat center view dan ukuran peta.
```html
<!DOCTYPE html>
<html>
<head>
    <title>Marker</title>
    <link rel="stylesheet" href="../leaflet/leaflet.css"/>
    <script src="../leaflet/leaflet.js"></script>
</head>
<body>
    <div id="mapku" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var mymap = L.map('mapku').setView([-0.9142997125961476,100.46607589539128], 13);

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(mymap);
</script>
</html>
```

**Langkah 3** : Tambahkan marker dengan menggunakan fungsi marker(lat, lng) kedalam peta. Pada fungsi marker dapat diisi 2 parameter yaitu latitude dan longitude.
```html
<!DOCTYPE html>
<html>
    <head>
    <title>marker</title>
    <link rel="stylesheet" href="../leaflet/leaflet.css"/>
    <script src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="mapku" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var mymap = L.map('mapku').setView([-0.9142997125961476,100.46607589539128], 13);

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(mymap);

    L.marker([-0.9142997125961476,100.46607589539128]).addTo(mymap);
</script>  
</html>
```

**Langkah 4** :Jalankan peta dengan melakukan double click file peta2.html
![m2_1](https://user-images.githubusercontent.com/114122090/195177821-22aabe46-c906-4efb-b148-9e68e04395ba.png)

## Tugas 2 : Tampilkan 2 Marker atau lebih
**Langkah 1** : Tambahkan fungsi marker sebanyak 2 atau lebih setelah marker sebelumnya.
```html
<!DOCTYPE html>
<html>
    <head>
        <title>Marker</title>
        <link rel="stylesheet" href="../leaflet/leaflet.css"/>
        <script src="../leaflet/leaflet.js"></script>
    </head>
    <body>
        <div id="mapku" style="width: 100%; height: 600px;"></div>
    </body>
    <script type="text/javascript">
        var mymap = L.map('mapku').setView([-0.9142997125961476,100.46607589539128], 13);
        
        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(mymap);

        L.marker([-0.9142997125961476,100.46607589539128]).addTo(mymap);
        L.marker([-0.9142997125961476,100.47607589539128]).addTo(mymap);
    </script>  
</html>
```

**Langkah 2** : Alternatif lainnya dengan menggunakan sistem array dan melakukan looping untuk proses pencetakan marker ke map. Kode multi marker menggunakan  looping array sebagai berikut.
```html
<!DOCTYPE html>
<html>
    <head>
        <title>Marker</title>
        <link rel="stylesheet" href="../leaflet/leaflet.css"/>
        <script src="../leaflet/leaflet.js"></script>
    </head>
    <body>
        <div id="mapku" style="width: 100%; height: 600px;"></div>
    </body>
    <script type="text/javascript">
        var mymap = L.map('mapku').setView([-0.9142997125961476,100.46607589539128], 13);
        
        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(mymap);

        var locations = [[-0.9142997125961476,100.46607589539128],
                         [-0.9142997125961476,100.47607589539128],
                         [-0.9142997125961476,100.49607589539128],
                         [-0.9142997125961476,100.45607589539128],
                         [-0.9142997125961476,100.50607589539128]];
                     
        for (var i = 0; i < locations.length; i++) {
            marker = new L.marker([locations[i][0], locations[i][1]]).addTo(mymap);
        }
    </script>  
</html>
```

**Langkah 3** : Perhatikan array dari kode tersebut dan pemanggilannya pada looping. Terdiri dari array 1 dimensi dengn 2 ruas. Sehingga pemanggilan di looping sangat sederhana array 0 (latitude) dan array 1 (longitude).

**Langkah 4** : Simpan dengan nama MultiMarker.html dan jalankan peta tersebut dengan melakukan double click pada file MultiMarker.html
![m2_2](https://user-images.githubusercontent.com/114122090/195179286-bdd6a65a-c569-476c-9d9e-5ed1aa7118b9.png)


## Modul 3
# `Tooltip dan Pop Up (Info Window)`
## Tugas 1 : Tampilkan tooltip pada sebuah marker
**Langkah 1** : Buatlah 1 buah file html dengan nama info.html. Siapkan peta dasar dengan center view Kota Padang
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Menampilkan tooltip pada sebuah marker</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">

        var myMap = L.map('map_pertama'). setView([-0.9243208769469531, 100.36247176394912],15);//kota padang

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(myMap);
</script>
</html>
```
**Langkah 2** : Tambahkan 2 buah marker yaitu Masjid Raya Sumtera Barat dan Kantor Gubernur. Tambahkan fungsi bindTootips(”String”) dan tambahkan informasi pada parameter fungsi tersebut sesuai informasi pada masing-masing marker
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Menampilkan tooltip pada sebuah marker</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">

        var myMap = L.map('map_pertama'). setView([-0.9243208769469531, 100.36247176394912],15);//kota padang

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(myMap);

     L.marker([-0.9243208769469531, 100.36247176394912]).bindTooltip("Mesjid Raya Sumatera Barat").addTo(myMap);
     L.marker([-0.9375940171064687, 100.36044269997706]).bindTooltip("Kantor Gubenur Sumatera Barat").addTo(myMap);

</script>
</html>
```

**Langkah 3** : Buka file info.html dengan cara melakukan double click
![m3_1](https://user-images.githubusercontent.com/114122090/195180781-d2fccffc-b1f7-403d-83cc-ddbc7bbea159.png)

## Tugas 2 : Tampilkan PopUp pada sebuah marker
**Langkah 1** : Lakukan langkah yang sama dengan pembuatan tooltip. Kemudian ubah bagian fungsi bindTooltip menjadi bindPopup.
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan PopUp pada sebuah marker</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">

        var myMap = L.map('map_pertama'). setView([-0.9243208769469531, 100.36247176394912],15);//kota padang

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(myMap);

    L.marker([-0.9243208769469531, 100.36247176394912]).bindPopup("<b>Info Mesjid Raya Sumatera Barat</b><br>Waktu Zuhur : 12:15 WIB").addTo(myMap);
    L.marker([-0.9375940171064687, 100.36044269997706]).bindPopup("<b>Informasi Layanan Kantor Gubenur</b><br>Layanan Ditutup Sementara Karena Covid").addTo(myMap);
</script>
</html>
```

**Langkah 2** : Tambahkan kode HTML kedalam parameter bindPopup. Misal artikel mengenai Masjid Raya yang terdiri dari gambar _<img>_, embed youtube video _<iframe>_ dan paragraf sebuah artikel _<p>_.
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan PopUp pada sebuah marker</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">

        var myMap = L.map('map_pertama'). setView([-0.9243208769469531, 100.36247176394912],15);//kota padang

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(myMap);

    L.marker([-0.9243208769469531, 100.36247176394912]).bindPopup("<b>Info Mesjid Raya Sumatera Barat</b><br>Waktu Zuhur : 12:15 WIB").addTo(myMap);
    L.marker([-0.9375940171064687, 100.36044269997706]).bindPopup("<b>Informasi Layanan Kantor Gubenur</b><br>Layanan Ditutup Sementara Karena Covid").addTo(myMap);

    var info_masjid_raya = '<p style="text-align: center;"><img src="images/mesjid_raya.jpg" width="250px" height="100px"/></p><p>Masjid Raya Sumatra Barat adalah    
    masjid tanpa kubah. Atap menjadi berupa khas rumah adat Minang serta terdapat ukiran-ukiran pada dinding. Masyarakat Sumatera Barat terkenal dengan pepatah Adat 
    basandi syarak, syarak basandi Kitabullah, yang artinya adat bersandikan kepada agama, dan agama bersandikan kitabullah (Al-Quran). Hal itulah yang tercemin dalam 
    Mesjid Raya Sumatera Barat. <a href="https://travel.detik.com/domestic-destination/d-6178766/eksplor-pesona-sumatra-barat-yuk-cuma-rp-2-jutaan">Baca 
    Selengkapnya</a></p>';
   
    L.marker([-0.9243208769469531, 100.36247176394912]).bindTooltip("Mesjid Raya Sumatera Barat").bindPopup(info_masjid_raya).addTo(myMap);
</script>
</html>
```

**Langkah 3** : Tampilakan hasil dari kode tersebut.
![m3_2](https://user-images.githubusercontent.com/114122090/195184581-991a5d81-41ae-4c08-b81e-a779610a896a.png)


## Tugas 3 : Tampilkan Multi Tooltip atau Popup menggunakan array data
**Langkah 1** : Lakukan langkah yang sama dengan pembuatan tooltip atau popup seperti tugas sebelumnya.
	
**Langkah 2** : Tambahkan Array Data seperti pada Modul 2 Tugas 2. Untuk tooltip dan popup Array yang tersimpan bertambah 2. Dari yang sebelumnya hanya latitude dan  longitude, dengan adanya penambahan tooltip dan popup, maka array bertambah memasukan informasi tooltip dan popup. Sehingga pada array/atribut myLocation terdiri dari 4 ruas/kolom.
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan Multi Tooltip atau Popup  menggunakan array data</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var myMap = L.map('map_pertama'). setView([-0.9243208769469531, 100.36247176394912],15);//kota padang

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(myMap);

    var myLocation = [
        [-0.9243208769469531 , 100.36247176394912 , 'Masjid Raya Sumbar', 'Informasi Tentang Mesjid Raya Sumbar'],
        [-0.9375940171064687 , 100.36044269997706 , 'Kantor Gubernur Sumbar', 'Informasi Tentang Kantor Gubernur Sumbar'],
        [-0.8710549648245872 , 100.3884024702207 , 'Kantor Walikota Padang', 'Informasi Tentang Kantor Walikota Padang'],
        [-0.9142997125961476 , 100.46607589539128 ,'Politeknik Negeri Padang','Informasi Tentang PNP'],
    ]; //Array dari lokasi kita

    //selanjutnya kita tampilkan dengan perulangan for
    for (var i = 0; i < myLocation.length; i++) {
        markerMaps = new L.marker([myLocation[i][0], myLocation[i][1]]).addTo(myMap).bindTooltip(myLocation[i][2]).bindPopup(myLocation[i][3]);
    }   
</script>
</html>	
```

**Langkah 3** : Tambahkan Video Youtube pada informasi popup dengan cara melakukan click pada menu bagikan - embeded. Kemudian copy text embeded seperti berikut
```html
<iframe width="300px" height="200px" 
    src="https://www.youtube.com/embed/aqW5KASLztQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen></iframe>
```

**Langkah 4** : Paste code embede tersebut ke array ke 3 atau kolom ke 4
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan Multi Tooltip atau Popup  menggunakan array data</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var myMap = L.map('map_pertama'). setView([-0.9243208769469531, 100.36247176394912],15);//kota padang

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(myMap);
    
    var info_masjid_raya = '<p style="text-align: center;"><b>Mesjid Raya Sumbar</b><br><iframe width="300px" height="200px" 
    src="https://www.youtube.com/embed/aqW5KASLztQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen></iframe></p><p>Masjid Raya Sumatra Barat adalah masjid tanpa kubah. Atap menjadi berupa khas rumah adat Minang serta terdapat ukiran-ukiran pada 
    dinding. Masyarakat Sumatera Barat terkenal dengan pepatah Adat basandi syarak, syarak basandi Kitabullah, yang artinya adat bersandikan kepada agama, dan agama 
    bersandikan kitabullah (Al-Quran). Hal itulah yang tercemin dalam Mesjid Raya Sumatera Barat. <a href="https://travel.detik.com/domestic-destination/d-
    6178766/eksplor-pesona-sumatra-barat-yuk-cuma-rp-2-jutaan">Baca Selengkapnya</a></p>';

    var myLocation = [
        [-0.9243208769469531 , 100.36247176394912 , 'Masjid Raya Sumbar', info_masjid_raya],
        [-0.9375940171064687 , 100.36044269997706 , 'Kantor Gubernur Sumbar', 'Informasi Tentang Kantor Gubernur Sumbar'],
        [-0.8710549648245872 , 100.3884024702207 , 'Kantor Walikota Padang', 'Informasi Tentang Kantor Walikota Padang'],
        [-0.9142997125961476 , 100.46607589539128 ,'Politeknik Negeri Padang','Informasi Tentang PNP'],
    ]; //Array dari lokasi kita

    //selanjutnya kita tampilkan dengan perulangan for
    for (var i = 0; i < myLocation.length; i++) {
        markerMaps = new L.marker([myLocation[i][0], myLocation[i][1]]).addTo(myMap).bindTooltip(myLocation[i][2]).bindPopup(myLocation[i][3]);
    }   
</script>
</html>	
```
**Langkah 5** : Buka file kode tersebut dengan melakukan double click
![m3_3](https://user-images.githubusercontent.com/114122090/195184701-28f48135-5210-4205-a448-efbc43df037e.png)
	
## Modul 4
# 'Polyline (Vector Garis)'
## Tugas 1 : Tampilkan jalan masuk ke Politeknik Negeri Padang
**Langkah 1** : Buatlah 1 buah file html dengan nama line .html. Siapkan peta dasar dengan center view Kampus Politeknik Negeri Padang
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan jalan masuk ke Politeknik Negeri Padang</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var myMap = L.map('map_pertama'). setView([-0.91408, 100.460465],15);//kota padang

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(myMap);
</script>
</html>	
```

**Langkah 2** : Lakukan digitasi atau cari koordinat titik per titik jalan masuk politeknik. Kemudian dari koordinat tersebut digabung menjadi garis
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan jalan masuk ke Politeknik Negeri Padang</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var myMap = L.map('map_pertama'). setView([-0.91408, 100.460465],15);//kota padang

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(myMap);

    var jalankebarak = [
        [-0.914727, 100.468787],
        [-0.914466, 100.469036],
        [-0.913931, 100.469146],
        [-0.913040, 100.469147],
        [-0.912933, 100.468122],
        [-0.912590, 100.467013],
    ];

    L.polyline(jalankebarak).addTo(myMap)
</script>
</html>
```

**Langkah 3** : Buka file tersebut pada browser untuk melihat hasilnya
![m4_1](https://user-images.githubusercontent.com/114122090/195186453-cbf89b56-709c-49df-8ce1-9cf5f6d63bf9.png)

## Tugas 2: Tampilkan 2 jalan masuk ke Politeknik Negeri Padang
**Langkah 1** : Buatlah 1 buah file html dengan nama line .html. Siapkan peta dasar dengan center view Kampus Politeknik Negeri Padang.
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan jalan masuk ke Politeknik Negeri Padang</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var myMap = L.map('map_pertama'). setView([-0.91408, 100.460465],15);//kota padang

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(myMap);
</script>
</html>	
```

**Langkah 2** : Lakukan digitasi atau cari koordinat titik per titik jalan masuk politeknik. Kemudian dari koordinat tersebut digabung menjadi garis
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan 2 jalan masuk ke Politeknik Negeri Padang</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var myMap = L.map('map_pertama'). setView([-0.91408, 100.460465],15);//kota padang

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(myMap);

    var duajalankepoli = [
        //array kordinate jalan petama
        [
            [-0.923044, 100.448551],
            [-0.921064, 100.451353],
            [-0.917667, 100.455348],
            [-0.907876, 100.461421],
            [-0.906810, 100.463411],
            [-0.912420, 100.468700],
        ],
        //array kordinate jalan kedua
        [
            [-0.922995, 100.448551],
            [-0.919171, 100.453870],
            [-0.919893, 100.454592],
            [-0.918466, 100.457799],
            [-0.917946, 100.461660],
            [-0.914660, 100.462959],
            [-0.914952, 100.467663],
            [-0.914062, 100.467728],
        ]
    ];

    L.polyline(duajalankepoli).addTo(myMap);

    L.marker([-0.907876, 100.461421])
    .bindTooltip("<b>Jalan Terjauh</b> <br> Jarak 7 KM")
    .addTo(myMap); //pop disalah satu line

    L.marker([-0.914660, 100.462959])
    .bindTooltip("<b>Jalan Tercepat</b> <br> Jarak 4 KM")
    .addTo(myMap); //pop disalah satu line

</script>
</html>
```

**Langkah 3** : Buka file tersebut pada browser untuk melihat hasilnya
![m4_2](https://user-images.githubusercontent.com/114122090/195186741-f746fcb8-145c-4bdc-ab2b-c7e899c68e7a.png)

## Modul 5
# 'Polygon'
## Tugas 1 : Kawasan Politeknik Negeri Padang
**Langkah 1** : Buatlah 1 buah file html dengan nama polygon.html. Siapkan peta dasar dengan center view Kampus Politeknik Negeri Padang.
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan jalan masuk ke Politeknik Negeri Padang</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var myMap = L.map('map_pertama'). setView([-0.91408, 100.460465],15);//kota padang

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(myMap);
</script>
</html>	
```

**Langkah 2** : Lakukan digitasi atau gunakan koordinat hasil survey kawasan politeknik dan bentuk menjadi array data polygon.
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Siti Nurhaliza Yus_2101091013">
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
        <title>Tugas 1 : Kawasan Politeknik Negeri Padang</title>
    </head>
<body>
    <div id="map" style="width: 100%; height: 600px;"></div>
</body>
    <script>
        var myMap = L.map('map').setView([-0.9138137,100.4657295],17);//politeknik negeri padang

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
         maxZoom: 19,
         attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(myMap);

        var kordinatAreaPoliteknik = [
        [-0.914666, 100.465205],
        [-0.914667, 100.465194],
        [-0.915009, 100.468138],
        [-0.914627, 100.468936],
        [-0.913050, 100.469191],
        [-0.913050, 100.469191],
        [-0.912885, 100.467826],
        [-0.912367, 100.465948],
        [-0.913139, 100.465775],
        [-0.914264, 100.465672],
        [-0.914508, 100.465216],
    ];
    var areaPoliteknik = L.polygon (kordinatAreaPoliteknik, {color: 'orange'}).addTo(myMap);
    </script>
</html>
```

**Langkah 3** : Lihat hasil dengan melakukan double click pada file polygon.html
![m5_1](https://user-images.githubusercontent.com/114122090/195187086-50b3e192-f466-4449-a1c8-4e0b9ab8860d.png)

## Tugas 2 : Menampilkan 2 atau lebih Kawasan
**Langkah 1: Buatlah 1 buah file html dengan nama multipolygon.html. Siapkan peta dasar dengan center view Kampus Politeknik Negeri Padang.
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tampilkan jalan masuk ke Politeknik Negeri Padang</title>
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
    </head>
<body>
    <div id="map_pertama" style="width: 100%; height: 600px;"></div>
</body>
<script type="text/javascript">
    var myMap = L.map('map_pertama'). setView([-0.91408, 100.460465],15);//kota padang

    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(myMap);
</script>
</html>	
```

**Langkah 2** : Lakukan digitasi atau gunakan koordinat hasil survey kawasan politeknik, fakultas teknik, atau fakultas lain di Universitas Andalas. Kemudian bentuk menjadi array data polygon.
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Siti Nurhaliza Yus_2101091013">
        <link rel="stylesheet" type="text/css" href="../leaflet/leaflet.css"/>
        <script type="text/javascript" src="../leaflet/leaflet.js"></script>
        <title>Tugas 2: Menampilkan 2 atau lebih Kawasan</title>
    </head>
<body>
    <div id="map" style="width: 100%; height: 600px;"></div>
</body>
    <script>
        var myMap = L.map('map').setView([-0.9138137,100.4657295],17);//politeknik negeri padang

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(myMap);

        var kordinatAreaPoliteknik = [
        [-0.914666, 100.465205],
        [-0.914667, 100.465194],
        [-0.915009, 100.468138],
        [-0.914627, 100.468936],
        [-0.913050, 100.469191],
        [-0.912885, 100.467826],
        [-0.912367, 100.465948],
        [-0.913139, 100.465775],
        [-0.914264, 100.465672],
        [-0.914508, 100.465216],
        ];
        var areaPoliteknik = L.polygon (kordinatAreaPoliteknik, {color: 'orange'}).addTo(myMap);

        var kordinatFakultasTeknik = [
        [-0.914685, 100.463145],
        [-0.914690, 100.464473],
        [-0.914679, 100.465199],
        [-0.914494, 100.465199],
        [-0.914242, 100.465652],
        [-0.913241, 100.465826],
        [-0.912848, 100.464430],
        [-0.912369, 100.463947],
        [-0.912213, 100.463559],
        [-0.912673, 100.463377],
        [-0.913710, 100.463282],
        ];

        var areaFakTeknik = L.polygon (kordinatFakultasTeknik, {color: 'green'}).addTo(myMap);
    </script>
</html>
```

**Langkah 3** : Beri auto fokus pada peta
```html
myMap.fitBounds(areaPoliteknik.getBounds()); //membuat auto fokus
```
**Langkah 4** : Lihat hasil dengan melakukan double click pada file multipolygon.html
![m5_2](https://user-images.githubusercontent.com/114122090/195187353-cdddc0f3-a5d9-4961-82bf-6e31a093aac2.png)


