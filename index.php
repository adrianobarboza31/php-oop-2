<?php
class prodotti{
    public $nome;
    public $prezzo;
    public function __construct($_nome,$_prezzo){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
}
class cibo extends prodotti{
    public $gusto;
    public $quantità;
    public function __construct($_gusto,$_quantità,$_nome,$_prezzo){
        parent::__construct($_nome,$_prezzo);
        $this->gusto = $_gusto;
        $this->quantità = $_quantità;
    }
}
class giochi extends prodotti{
    public $materiale;
    public $genere;
    public function __construct($_materiale,$_genere,$_nome,$_prezzo){
        parent::__construct($_nome,$_prezzo);
        $this->materiale = $_materiale;
        $this->genere = $_genere;
    }
}
class cucce extends prodotti{
    public $colore;
    public $taglia;
    public function __construct($_colore,$_taglia,$_nome,$_prezzo){
        parent::__construct($_nome,$_prezzo);
        $this->colore = $_colore;
        $this->taglia = $_taglia;
    }
}
class categoria{
    public $nome;
    public function __construct($_nome){
                $this->nome = $_nome;

            }
};
$cane = new categoria('cani');
$gatto=new categoria('gatti');
$torta = new cibo('dolce', '1pezzo','torta','12euro');
$giochi = new giochi('gomma', 'palloni','palla','5euro');
$cucce = new cucce('rosso', 'piccola','cuccia','15euro');
var_dump($torta);
echo "<br>";
var_dump($giochi);
echo "<br>";
var_dump($cucce);
?>