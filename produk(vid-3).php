<?php 

// jualan produk
// komik
// game
class Produk {
	public  $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new produk();
$produk1->judul = "Kungfu Panda";
$produk1->penulis = "InnerBS";
$produk1->penerbit = "pinkPandaa";
$produk1->harga = 99.000;

$produk2 = new produk();
$produk2->judul = "Uncharted";
$produk2->penulis = "Neil Druckmann";
$produk2->penerbit = "Acerr Computer";
$produk2->harga = 55.000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();