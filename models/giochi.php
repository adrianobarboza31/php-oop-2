<?php
class giochi extends prodotti{
    
    public $materiale;
    public $genere;
    use prova;
    public function __construct($_materiale,$_genere,$numero1,$_nome,$_prezzo){
        parent::__construct($_nome,$_prezzo);
        $this->materiale = $_materiale;
        $this->genere = $_genere;
        $this->numero1 = $numero1;
    }
}
trait prova{
    public $numero1;
}
?>
