// Parafrafa Kode PHP

// Nama : Benedictus Budhi Dharmawan
// NIM  : 121140098
// Kelas : Praktikum RB

<?php

class MahasiswaInfo { // Menggantikan "data" untuk merepresentasikan informasi mahasiswa
    public $nama;
    public $nim;
    
    public function __construct($nama, $nim) { // Fungsi untuk menginisialisasi nama dan nim
        $this->nama = $nama;
        $this->nim = $nim;
    }
}

class Mahasiswa extends MahasiswaInfo { // Kelas baru sebagai turunan dari MahasiswaInfo
    public $programStudi;
    
    public function __construct($nama, $nim, $programStudi) {
        parent::__construct($nama, $nim); // Memanggil konstruktor kelas induk
        $this->programStudi = $programStudi; // Menambahkan atribut programStudi
    }
 
    public function tampilkanInfo() { // Fungsi untuk menampilkan informasi mahasiswa
        echo "Nama  : " . $this->nama . "<br>";
        echo "NIM   : " . $this->nim . "<br>";
        echo "Prodi : " . $this->programStudi . "<br>";
        echo "<br>";
    }
}

// Objek menggunakan kelas "Mahasiswa" dengan atribut nama, nim, dan programStudi
$mahasiswa1 = new Mahasiswa("Benedictus Budhi Dharmawan", "121140098", "Teknik Informatika");
$mahasiswa2 = new Mahasiswa("Ahmad Rizki Maulana", "121140105", "Teknik Informatika");

// Memanggil fungsi tampilkanInfo untuk menampilkan informasi objek yang telah dibuat
$mahasiswa1->tampilkanInfo();
$mahasiswa2->tampilkanInfo();
?>

