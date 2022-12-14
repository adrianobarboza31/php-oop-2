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
 function somma($n){
    if(!is_int($n)){
        throw new Exception('non è un numero');
    }
    return $n + $n;
}

$prodotti = [];
$cane = new categoria('cani');
$gatto=new categoria('gatti');
$torta = new cibo('dolce', '1pezzo','torta','12euro');
$giochi = new giochi('gomma', 'palloni',4,'palla','5euro');

$cucce = new cucce('rosso', 'piccola','cuccia','15euro');
var_dump($torta);
echo "<br>";
var_dump($giochi);
echo "<br>";
var_dump($cucce);
echo "<br>";
array_push($prodotti,$torta, $giochi, $cucce);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div>
<?php
    foreach($prodotti as $prodotto){?>
<div class="card">
   
        <?php
    echo $prodotto->nome ;
    echo " ";
        echo  $prodotto->prezzo;
    }
    ?>
</div>
</div>
<div>
<?php
try{
    echo somma('prova');
} catch(Exception $n){
    echo 'ECCEZIONE:' . $n->getMessage();
}
?>
</div>
