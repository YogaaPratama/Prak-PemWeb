// by ILHAM YOGA PRATAMA - 121140081
// Praktikum Pemrograman Web RB - Tugas 5 

// Fungsi untuk menghapus karakter terakhir di layar
function deleteCharacter() {
    const output = document.querySelector('.display .output');
    output.textContent = output.textContent.slice(0, -1);
}

// Fungsi untuk menghapus semua teks di layar
function clearDisplay() {
    const output = document.querySelector('.display .output');
    output.textContent = '';
}

// Fungsi untuk menghitung hasil
function calculateResult() {
    const output = document.querySelector('.display .output');
    try {
        const result = eval(output.textContent);
        document.querySelector('.display .output').textContent = result;
    } catch (error) {
        document.querySelector('.display .output').textContent = 'Error';
    }
}

// Fungsi untuk menambahkan operator
function appendOperator(operator) {
    const output = document.querySelector('.display .output');
    output.textContent += operator;
}

// Fungsi untuk menambahkan angka atau desimal
function appendNumber(number) {
    const output = document.querySelector('.display .output');
    output.textContent += number;
}

// Fungsi untuk menambahkan desimal
function appendDecimal(decimal) {
    const output = document.querySelector('.display .output');
    // Pastikan hanya satu desimal ditambahkan
    if (output.textContent.indexOf(decimal) === -1) {
        output.textContent += decimal;
    }
}