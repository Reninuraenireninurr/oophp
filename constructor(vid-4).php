<?php 

class Produk {
	public  $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new produk("Kungfu Panda","InnerBS","pinkPandaa",99.000);

$produk2 = new produk("Uncharted","Neil Druckmann","Acerr Computer",55.000);
$produk3 = new produk("Uncharted");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);