<?php

// Jualan Produk

interface InfoProduk {
  public function getInfoProduk(); 
}

abstract class Produk {
  
/* public $judul;
   public $penulis */
  
  protected $judul,
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
  
  
  public function setDiskon ( $diskon ) {
    $this->diskon = $diskon;
  }
  
  public function getHarga () {
    return $this->harga - ( $this->harga * $this->diskon / 100);
  }
  
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
  
  abstract public function getInfo();
  
}

class Komik extends Produk implements InfoProduk {
  public $jmlhHal;
  
  public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0, $jmlhHal =0 ) {
    
    parent::__construct( $judul, $penulis, $penerbit, $harga );
    
    $this->jmlhHal = $jmlhHal;
    
  }
  
  public function getInfo() {
    $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
    return $str;
  }
  
  public function getInfoProduk() {
    $str = "Komik : ". $this->getInfo() ." - {$this->jmlhHal} Halaman.";
    return $str;
  }
  
}


class Game extends Produk implements InfoProduk {
  public $levelGame;
  
  public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0, $levelGame =0 ) {
    
    parent::__construct( $judul, $penulis, $penerbit, $harga );
    
    $this->levelGame = $levelGame;
}

  public function getInfo() {
    $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk () {
    $str = "Game : ". $this->getInfo() ." ~ {$this->levelGame} Level.";
    return $str;
  }
  
}

class CetakInfoProduk {
  
  public $daftarProduk = [];
  
  public function tambahProduk( Produk $produk )
  {
    
    $this->daftarProduk[] = $produk;
    
  }
  
  public function cetak() 
  {
    
    $str = "DAFTAR INFO PRODUK : <br><br>";
    
    foreach ( $this->daftarProduk as $p )
    {
      $str .= "- {$p->getInfoProduk()} <br>";
    }
    
    return $str;
    
  }
  
}


$produk1 = new Komik("Genduruwo Malaysia", "Brando", "Kontolodon.com", 15000, 100);

$produk2 = new Game("Brando Bocil", "Bocil Kematian", "Garena", 150000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();