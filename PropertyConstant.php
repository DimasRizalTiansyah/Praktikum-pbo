<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

//objek
$produk = new Produk();

$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 1000000;
$produk->stok = 5;

//hitung pajak

$pajak = Produk::PAJAK * 100;
$jumlahPajak = $produk->harga * Produk::PAJAK;

//total
$total = $produk->harga + $jumlahPajak;

echo "Produk : $produk->nama <br>";
echo "Harga : Rp.$produk->harga <br>";
echo "Stok : $produk->stok <br>";
echo " Pajak : $pajak %<br>";
echo "<br/>";
echo "Total Harga setelah Pajak : Rp.$total <br>";
