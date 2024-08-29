<?php

// Jualan Produk

class Produk {
  
/* public $judul;
   public $penulis */
  
  public $type,
         $judul,
         $penulis,
         $penerbit,
         $harga,
         $jmlhHal,
         $levelGame;
  
  public function __construct($type = "Komik", $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0, $jmlhHal =0, $levelGame=0 ) {
    
    $this->type = $type;
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
    $str = "{$this->type} : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
    
    if($this->type == "Komik") {
      $str .= " - {$produk->jmlhHal} Halaman.";
    } elseif ($this->type == "Game") {
      $str .= " ~ {$this->levelGame} Level.";
    }
    return $str;
  }
  
}

class CetakInfoProduk {
  
  public function cetak( Produk $produk ) {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
    
  }
  
}

$produk1 = new Produk("Komik", "Genduruwo Malaysia", "Brando", "Kontolodon.com", 15000, 100, 0);

$produk2 = new Produk("Game", "Brando Bocil", "Bocil Kematian", "Garena", 150000, 0, 50);

echo $produk1->CetakLengkapInfoProduk();
echo "<br>";
echo $produk2->CetakLengkapInfoProduk();