# SIG_2101091013 Praktek
Tutorial Latihan :
- [Modul 1](README.md#modul-1) Maps API
- [Modul 2](README.md#modul-2) Marker (Vector Point)
- [Modul 3](README.md#modul-3)
- [Modul 4](README.md#modul-4)
- [Modul 5](README.md#modul-5)

## Modul 1
# `Maps API` 
## Tugas 1 : Lakukan Proses Instalasi
**Langkah 1** : Download dokumnentasi Leaftjs pada alamat  (https://leafletjs.com/reference-1.7.1.html) dan PostGIS pda alamat
(https://postgis.net/stuff/postgis-3.0.pdf)

**Langkah 2** : Download text editor Sublime Text pada alamat https://www.sublimetext.com/3 atau Visual Code pada alamat (https://code.visualstudio.com/download)

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
**Langkah 2** : Tambahkan 2 buah marker yaitu Masjid Raya Sumtera Barat dan Kantor Gubernur. Tambahkan fungsi bindTootips(”String”) dan tambahkan informasi pada parameter fungsi tersebut sesuai informasi pada masing-masing marker.
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

## Tugas 2 :

## Modul 4
#
##
##

## Modul 5
#
##
##
