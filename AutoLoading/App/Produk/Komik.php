<?php

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
