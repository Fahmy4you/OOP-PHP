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
  
  public function getInfoProduk() {
    $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
    return $str;
  }
  
}

class Komik extends Produk {
  public $jmlhHal;
  
  public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0, $jmlhHal =0 ) {
    
    parent::__construct( $judul, $penulis, $penerbit, $harga );
    
    $this->jmlhHal = $jmlhHal;
    
  }
  
  public function getInfoProduk() {
    $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlhHal} Halaman.";
    return $str;
  }
  
}


class Game extends Produk {
  public $levelGame;
  
  public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0, $levelGame =0 ) {
    
    parent::__construct( $judul, $penulis, $penerbit, $harga );
    
    $this->levelGame = $levelGame;
}
  
  public function getInfoProduk () {
    $str = "Game : ". parent::getInfoProduk() ." ~ {$this->levelGame} Level.";
    return $str;
  }
  
}


$produk1 = new Komik("Genduruwo Malaysia", "Brando", "Kontolodon.com", 15000, 100);

$produk2 = new Game("Brando Bocil", "Bocil Kematian", "Garena", 150000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();