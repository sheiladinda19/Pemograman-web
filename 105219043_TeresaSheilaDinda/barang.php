<?php
class Barang {
    private $nama;
    private $beratKG;
    private $beratG;
    private $beratMG;
    private $stok;

    function __construct($nama, $beratKG, $stok){
        $this->nama = $nama;
        $this->beratKG = $beratKG;
        $this->stok = $stok;
    }

    function convertBeratG($beratKG){
        $this->beratG = $beratKG*1000;
        return $this->beratG;
    }

    function convertBeratMG($beratKG){
        $this->beratMG = $beratKG*1000000;
        return $this->beratMG;
    }
    
    function getNama(){
        return $this->nama;
    }

    function getBerat(){
        return $this->beratKG;
    }

    function getStok(){
        return $this->stok;
    }
    
}

?>