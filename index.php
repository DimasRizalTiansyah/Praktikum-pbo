<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//objek
$produk = new Produk();

$produk->setKode("P001")
        ->setNama("Laptop")
        ->setHarga(10000000)
        ->setStok(5);

echo "Produk : " . $produk->getNama();
echo "Harga : Rp." . $produk->getHarga() . " <br>";
echo "Stok : " . $produk->getStok() . " <br>";
echo " Pajak : " . $produk->pajak() . " %";
echo "<br/>";
echo "<br/>";
echo "Total Harga setelah Pajak : Rp." . $produk->total() . " <br>";
