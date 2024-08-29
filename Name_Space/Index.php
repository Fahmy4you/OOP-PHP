<?php

// Jualan Produk
require 'App/init.php';

/*
$produk1 = new Komik("Genduruwo Malaysia", "Brando", "Kontolodon.com", 15000, 100);

$produk2 = new Game("Brando Bocil", "Bocil Kematian", "Garena", 150000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();

echo "<hr>";
*/

// Cara Menjalankan NameSpace

/* 
# Menggunakan Cara Biasa
new App\Service\User();
echo "<br>";
new App\Produk\User();

*/

# Menggunakan Alias 
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
