<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Kelas, Objek, Parameter, dan Metode di PHP</title>
</head>
<body>
<h> Tugas 1 </h>
<?php
class Mobil {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function tampilkanInfo() {
        echo "Merk Motor: " . $this->merk . "<br>";
        echo "Warna Motor: " . $this->warna . "<br>";
    }
}

$mobilSaya = new Mobil("Beat fi", "Merah Merona");
$mobilSaya->tampilkanInfo();
?>

</body>
</html>
