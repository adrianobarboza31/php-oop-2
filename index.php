<?php
include __DIR__ . './models/Categoria.php';
include __DIR__ . './models/Cibo.php';
include __DIR__ . './models/Cucce.php';
include __DIR__ . './models/Giochi.php';
class Prodotti{
    public $nome;
    public $prezzo;
    public function __construct($_nome,$_prezzo){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
}
 function Somma($n){
    if(!is_int($n)){
        throw new Exception('non è un numero');
    }
    return $n + $n;
}

$prodotti = [];
$cane = new Categoria('cani');
$gatto=new Categoria('gatti');
$torta = new Cibo('dolce', '1pezzo','torta','12euro');
$giochi = new Giochi('gomma', 'palloni',4,'palla','5euro');

$cucce = new Cucce('rosso', 'piccola','cuccia','15euro');
// var_dump($torta);
// echo "<br>";
// var_dump($giochi);
// echo "<br>";
// var_dump($cucce);
// echo "<br>";
array_push($prodotti,$torta, $giochi, $cucce);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="centro">
    <h1>prodotti</h1>
    </div>
    
<div class="d-flex">
<?php

foreach ($prodotti as $prodotto) { ?>
<div class="ab-card">
   <div>
    <span>
    <?php
    echo "nome prodotto: ";
    ?>
    </span>
  <?php
    echo $prodotto->nome;

        ?>
    </div>
    <div>
        <span>
        <?php
    echo "prezzo prodotto: ";
    ?>
        </span>
  <?php
    echo $prodotto->prezzo;

        ?>
    </div>
   

</div>
<?php
}
?>
</div>
<div class="message">
<?php
try{
    echo Somma('prova');
} catch(Exception $n){
    echo 'ECCEZIONE:' . $n->getMessage();
}
?>
</div> 
    </div>
</body>
</html>

