<?php
class giochi extends prodotti{
    public $materiale;
    public $genere;
    public function __construct($_materiale,$_genere,$_nome,$_prezzo){
        parent::__construct($_nome,$_prezzo);
        $this->materiale = $_materiale;
        $this->genere = $_genere;
    }
}
?>