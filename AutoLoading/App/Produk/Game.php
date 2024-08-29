<?php

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