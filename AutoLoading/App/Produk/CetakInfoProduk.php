<?php 
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
