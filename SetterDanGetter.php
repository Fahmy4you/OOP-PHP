<?php

// Jualan Produk

class Produk {
  
/* public $judul;
   public $penulis */
  
  private $judul,
          $penulis,
          $penerbit,
          $diskon = 0,
          $harga;
  
  public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0 ) {

    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    
  }
  
  public function getJudul() {
    return $this->judul;
  }
  
  public function setJudul( $judul ) {
    $this->judul = $judul;
  }
  
  public function getPenulis() {
    return $this->penulis;
  }
  
  public function setPenulis( $penulis ) {
    $this->penulis = $penulis;
  }
  public function getPenerbit() {
    return $this->penerbit;
  }
  
  public function setPenerbit( $penerbit ) {
    $this->penerbit = $penerbit;
  }
  
  public function setHarga( $harga ) {
    return $this->harga = $harga;
  }
  
  public function getDiskon () {
    return $this->diskon;
  }
  
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
  
  public function getInfoProduk() {
    $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
    return $str;
  }
  
  public function setDiskon ( $diskon ) {
    $this->diskon = $diskon;
  }
  
  public function getHarga () {
    return $this->harga - ( $this->harga * $this->diskon / 100);
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

class CetakInfoProduk {
  
  public function cetak( Produk $produk ) 
  {
    
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
    
    return $str;
    
  }
  
}


$produk1 = new Komik("Genduruwo Malaysia", "Brando", "Kontolodon.com", 15000, 100);

$produk2 = new Game("Brando Bocil", "Bocil Kematian", "Garena", 150000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo "<hr>";
echo "<br>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk2->setPenulis("Tod");
echo $produk2->getPenulis();