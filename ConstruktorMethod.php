<?php

// Jualan Produk

class Produk {
  
/* public $judul;
   public $penulis */
  
  public $judul,
         $penulis,
         $penerbit,
         $harga;
  
  public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0 ) {
    
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    
  }
  
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
  
}

/*
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
*/

$produk1 = new Produk("Genduruwo Malaysia", "Brando", "Kontolodon.com", 15000);

$produk2 = new Produk("Brando Bocil", "Bocil Kematian", "Garena", 150000);

$produk3 = new Produk("Bocil Kehidupan");
echo "Komik :" . $produk1->getLabel();

echo "<br>";

echo "Game :" . $produk2->getLabel();

echo "<br>";

var_dump($produk3);