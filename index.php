<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//objek
$produk = new Produk("P001", "Laptop", 1000000, 5);

echo "Produk : $produk->nama <br>";
echo "Harga : Rp.$produk->harga <br>";
echo "Stok : $produk->stok <br>";
echo " Pajak : " . $produk->pajak() . " %";
echo "<br/>";
echo "<br/>";
echo "Total Harga setelah Pajak : Rp." . $produk->total() . " <br>";
