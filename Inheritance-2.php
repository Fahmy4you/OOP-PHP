<?php

// Jualan Produk

class Produk {
  
/* public $judul;
   public $penulis */
  
  public $judul,
         $penulis,
         $penerbit,
         $harga,
         $jmlhHal,
         $levelGame;
  
  public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0, $jmlhHal =0, $levelGame=0 ) {

    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlhHal = $jmlhHal;
    $this->levelGame = $levelGame;
    
  }
  
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
  
  public function CetakLengkapInfoProduk() {
    $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
    return $str;
  }
  
}

class Komik extends Produk {
  
  public function CetakLengkapInfoProduk () {
    $str = "Komik : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlhHal} Halaman.";
    return $str;
  }
  
}

class Game extends Produk {
  
  public function CetakLengkapInfoProduk () {
    $str = "Game : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ~ {$this->levelGame} Level.";
    return $str;
  }
  
}


$produk1 = new Komik("Genduruwo Malaysia", "Brando", "Kontolodon.com", 15000, 100);

$produk2 = new Game("Brando Bocil", "Bocil Kematian", "Garena", 150000, 0, 50);

echo $produk1->CetakLengkapInfoProduk();
echo "<br>";
echo $produk2->CetakLengkapInfoProduk();