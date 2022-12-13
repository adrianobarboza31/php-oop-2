<?php
class cibo extends prodotti{
    public $gusto;
    public $quantità;
    public function __construct($_gusto,$_quantità,$_nome,$_prezzo){
        parent::__construct($_nome,$_prezzo);
        $this->gusto = $_gusto;
        $this->quantità = $_quantità;
    }
}
?>