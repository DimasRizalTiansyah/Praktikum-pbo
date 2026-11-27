<?php

require('./Jasa.php');

use Pbo\Marketplace\Jasa;

//objek
$produk = new Jasa();

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

echo "<br/>";
echo "Metode Pembayaran : " . $produk->payment("qris") . " <br>";