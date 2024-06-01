<?php
class DataBahanBakar{
    private $HargaSSuper;
    private $HargaSVPower;
    private $HargaSVPowerDiesel;
    private $HargaSVPowerNitro;

    public $JenisYangDipilih;
    public $totalLiter;

    protected $totalPembayaran;

    public function SetHarga($valSSuper, $valSVPower, $valSVPowerDiesel, $valSVPowerNitro){

        $this->HargaSSuper = $valSSuper;
        $this->HargaSVPower = $valSVPower;
        $this->HargaSVPowerDiesel = $valSVPowerDiesel;
        $this->HargaSVPowerNitro = $valSVPowerNitro;
    }
    public function getHarga(){
        // setelah nilai dari attriute di simpan, fungsi getter akan mengembalikan/menambahkan
        // karna data yang akan dikirim/dikeluarkan lebih dari satu, maka data2 tersebut
        $semuaDataSolar["SSuper"] = $this->HargaSSuper;
        $semuaDataSolar["SVPower"] = $this->HargaSVPower;
        $semuaDataSolar["SVPowerDiesel"] = $this->HargaSVPowerDiesel;
        $semuaDataSolar["SVPowerNitro"] = $this->HargaSVPowerNitro;
     //tujuan utama getter : return
     return $semuaDataSolar;
    }

}

class Pembelian extends DataBahanBakar{
    //data sudah disediakan, tinggal proses perhitungan jumlah pembelian 
    public function totalHarga(){
        $this->totalPembayaran = $this->getHarga()[$this->JenisYangDipilih] * $this->totalLiter;
    }
    public function cetakBukti(){
        echo "----------------------------------------------------------------";
        echo "<br>";
        echo "Jenis Bahan Bakar : " . $this->JenisYangDipilih;
        echo "<br>";
        echo "Total Liter : " . $this->totalLiter;
        echo "<br>";
        echo "Harga Bayar : Rp. " . number_format($this->totalPembayaran, 0, ',', '.' );
        echo "<br>";
        echo "----------------------------------------------------------------";

    }
}