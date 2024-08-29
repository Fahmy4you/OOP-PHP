<?php

// Jualan Produk

class Produk {
  
/* public $judul;
   public $penulis */
  
  public $judul = "judul",
         $penulis = "penulis",
         $penerbit = "penerbit",
         $harga = 0;
  
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
  
}

/*
$produk1 = new Produk();
$produk1->judul = "Tonikaku Kawai";
var_dump($produk1);

echo "<br><br>";

$produk2 = new Produk();
$produk2->judul = "Kimetsu No Yaiba";
$produk2->tambahProperti = "Hahaha";
var_dump($produk2); 
*/

$produk3 = new Produk();
$produk3->judul = "Genderuwo Malaysia";
$produk3->penulis = "Kontolodon";
$produk3->penerbit = "Kontolodon.com";
$produk3->harga = 5000;

$produk4 = new Produk();
$produk4->judul = "Brando Bocil";
$produk4->penulis = "Bocil Kematian";
$produk4->penerbit = "Garena";
$produk4->harga = 15000;

echo "Komik :" . $produk3->getLabel();

echo "<br>";

echo "Game :" . $produk4->getLabel();