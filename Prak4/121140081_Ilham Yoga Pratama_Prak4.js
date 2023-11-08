// by ILHAM YOGA PRATAMA - 121140081
// Praktikum Pemrograman Web RB - Tugas 4

// Meminta pengguna untuk memasukkan sebuah angka dan menyimpannya dalam variabel 'userInput'
const userInput = prompt("Masukkan Bilangan Bulat Positif:");

// Mengkonversi 'userInput' menjadi tipe data number dan menyimpannya dalam variabel 'number'
const number = Number(userInput);

// Memeriksa apakah 'number' bukan merupakan angka (NaN)
if (isNaN(number)) {
  // Jika 'number' bukan angka, mencetak pesan kesalahan
  console.log("SALAHH!, Mohon masukkan angka.");
} else {
  // Jika 'number' adalah angka, inisialisasi hitungan untuk bilangan ganjil dan genap
  let oddCount = 0;
  let evenCount = 0;

  // Loop dari 1 hingga 'number' untuk menghitung bilangan ganjil dan genap
  for (let i = 1; i <= number; i++) {
    if (i % 2 === 0) {
      // Jika 'i' adalah bilangan genap, tambahkan ke hitungan 'evenCount'
      evenCount++;
    } else {
      // Jika 'i' adalah bilangan ganjil, tambahkan ke hitungan 'oddCount'
      oddCount++;
    }
  }

  // Cetak hasil perhitungan
  console.log(`Bilangan bulat yang dimasukkan: ${number}`);
  console.log(`Jumlah bilangan ganjil: ${oddCount}`);
  console.log(`Jumlah bilangan genap: ${evenCount}`);
}