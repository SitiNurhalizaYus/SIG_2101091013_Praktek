# SIG_2101091013 Praktek
Tutorial Latihan :
- [Modul 1](README.md#modul-1) Maps API
- [Modul 2](README.md#modul-2)
- [Modul 3](README.md#modul-3)
- [Modul 4](README.md#modul-4)
- [Modul 5](README.md#modul-5)

## Modul 1
# Maps API
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
# Marker (Vector Point)
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
   </head>
</script>
</html>
```

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
##
##

# Modul 3
## 
##
##

# Modul 4
## 
##
##

# Modul 5
## 
##
##
