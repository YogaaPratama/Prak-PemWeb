<?php

// by ILHAM YOGA PRATAMA - 121140081
// Praktikum Pemrograman Web RB - Tugas 5

// Definisi kelas Hewan
class Hewan {
    public $jenis;
    public $suara;

    // Konstruktor untuk inisialisasi objek Hewan
    public function __construct($jenis, $suara) {
        $this->setJenis($jenis);
        $this->suara = $suara;
    }

    // Metode untuk validasi dan pengaturan jenis hewan
    public function setJenis($jenis) {
        // Validasi karakter input jenis hewan menggunakan regular expression
        if (!preg_match('/^[a-zA-Z\s]+$/', $jenis)) {
            throw new Exception("Jenis hewan hanya boleh mengandung huruf dan spasi. <br>");
        }

        $this->jenis = $jenis;
    }

    // Metode untuk menampilkan suara hewan
    public function suaraHewan() {
        echo "Hewan ini, sejenis $this->jenis, bersuara $this->suara.<br>";
    }

    // Destruktor untuk memberikan pesan saat objek dihancurkan
    public function __destruct() {
        echo "Objek Hewan telah dihancurkan.<br>";
    }
}

// Definisi kelas Kucing yang merupakan turunan dari kelas Hewan
class Kucing extends Hewan {
    public $ras;

    // Konstruktor untuk inisialisasi objek Kucing
    public function __construct($jenis, $suara, $ras) {
        parent::__construct($jenis, $suara);
        $this->ras = $ras;
    }

    // Metode untuk menampilkan informasi kucing
    public function infoKucing() {
        echo "Ini adalah kucing $this->jenis ras $this->ras yang bersuara $this->suara.<br>";
    }

    // Destruktor untuk memberikan pesan saat objek dihancurkan
    public function __destruct() {
        parent::__destruct();
        echo "Objek Kucing telah dihancurkan.<br>";
    }
}

// Blok try dan catch untuk menangani error yang mungkin terjadi selama eksekusi
try {
    // Uji dengan jenis hewan yang valid
    $hewan1 = new Hewan("Singa", "Mengaum");
    $hewan1->suaraHewan();

    // Uji dengan jenis hewan yang mengandung spasi
    $hewan2 = new Hewan("Anjing Hitam", "Menggonggong");
    $hewan2->suaraHewan();

    // Uji dengan jenis hewan yang mengandung angka
    $hewan3 = new Hewan("Kuda 123", "Menyembur");
    $hewan3->suaraHewan();

    // Membuat objek Kucing dengan jenis yang valid
    $kucing1 = new Kucing("Kucing Persia", "Meong", "Persia");
    $kucing1->infoKucing();

    // Membuat objek Kucing dengan jenis yang mengandung karakter khusus
    $kucing2 = new Kucing("Kucing! Anggora", "Meong", "Anggora");
    $kucing2->infoKucing();

} catch (Exception $e) {
    // Menangkap dan menampilkan pesan error
    echo "Error: " . $e->getMessage();
}
?>
