<?php

/*

// Difine Tidak Bisa Disimpan Di Dalam Class
define("NAMA", "Fbaz Gans");

echo NAMA;

echo "<br>";

const UMUR = 13;

echo UMUR;


class Coba {
  const NAMA = "Fbaz";
}
echo Coba::NAMA;
*/

// Beberapa Magic Method Dalam PHP 
/*
● __LINE__
● __FILE__
● __DIR__
● __FUNCTION__
● __CLASS__
● __TRAIT__
● __METHOD__
● __NAMESPACE__
*/

echo __LINE__; // Untuk Menampilkan Baris Ke Berapa
echo "<br>";

echo __FILE__; // Untuk Menampilkan Alamat Dari File Bersangkutan
echo "<br>";

echo __DIR__; // Untuk Menampilkan Alamat Dari Folder Bersangkutan
echo "<br>";

function CobaFunction() { 
  return __FUNCTION__; // Untuk Menampilkan Kita Sedang Di Function Apa 
}
echo CobaFunction();
echo "<br>";

class CobaClass {
  public const COBA =  __CLASS__; // Untuk Menampilkan Kita Sedang Di Class Apa 
}
echo CobaClass::COBA;
echo "<br>";


?>