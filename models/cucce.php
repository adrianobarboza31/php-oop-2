<?php
class cucce extends prodotti{
    public $colore;
    public $taglia;
    public function __construct($_colore,$_taglia,$_nome,$_prezzo){
        parent::__construct($_nome,$_prezzo);
        $this->colore = $_colore;
        $this->taglia = $_taglia;
    }
}
?>
