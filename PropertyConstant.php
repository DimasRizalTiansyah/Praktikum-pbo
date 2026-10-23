<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//objek
$produk = new Produk("P001", "Laptop", 1000000, 5);

echo "Produk : $produk->nama <br>";
echo "Harga : Rp.$produk->harga <br>";
echo "Stok : $produk->stok <br>";
echo " Pajak : " . $produk->pajak() . " %";
echo "<br/>";
echo "<br/>";
echo "Total Harga setelah Pajak : Rp." . $produk->total() . " <br>";
