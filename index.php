<?php
include __DIR__ . './models/categoria.php';
include __DIR__ . './models/cibo.php';
include __DIR__ . './models/cucce.php';
include __DIR__ . './models/giochi.php';
class prodotti{
    public $nome;
    public $prezzo;
    public function __construct($_nome,$_prezzo){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
}



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