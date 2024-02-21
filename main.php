<?php
include 'coche.php';
include 'Comustible.php';

$arrayCoches = [];

$coche = new Coche (4, "BMW", "2666KVH", "rojo", Comustible::gasolina);
array_push($arrayCoches,$coche);
$coche = new Coche (3,"Lanos", "2666KVD", "verde", Comustible::gasolina);
array_push($arrayCoches,$coche);
$coche = new Coche (2,"Lexus", "2666KVA", "azul", Comustible::gasoil);
array_push($arrayCoches,$coche);
$coche = new Coche (1,"Opel", "2666KVF", "amarillo", Comustible::electrico);
array_push($arrayCoches,$coche);

echo "". PHP_EOL;
echo " ". PHP_EOL;

# Mostrar todos coches del array:
for($i = 0; $i < count($arrayCoches); $i++){
    $arrayCoches[$i]->toString();
}

echo "". PHP_EOL;
echo " ". PHP_EOL;

# Coche de max cilindrada:
    $maxCilindrado = 0;
    $id = 0;
    for($i = 0; $i < count($arrayCoches); $i++){
        if($arrayCoches[$i]->getCilindrada() > $maxCilindrado){
            $maxCilindrado = $arrayCoches[$i]->getCilindrada();
            $id = $i;
        } 
    }

    /* $minCilindrado = 10;
        $id = 0;
    for($i = 0; $i < count($arrayCoches); $i++){
        if($arrayCoches[$i]->getCilindrada() < $minCilindrado){
            $minCilindrado = $arrayCoches[$i]->getCilindrada();
            $id = $i;
        } 
    }*/ 

    echo "Este coche " . $arrayCoches[$id]->getMarca() . " tiene mayor cilindrada -  " . $arrayCoches[$id]->getCilindrada();
    //se podria en vez de coger todos artibutos coger una parte solo??

echo "". PHP_EOL;
echo " ". PHP_EOL;

# Eliminar coche con matricula '2666KVD' (Lanos):
        /*$arrayCochesTemp = [];
        foreach ($arrayCoches as $index=>$coche){
            if($coche->getMatricula() == '2666KVD'){
                //cuando hace match, nada lo ignoro
            } else {
                array_push($arrayCochesTemp, $coche);
            }
        } 
        $arrayCoches =  $arrayCochesTemp;*/

        /*$arrayCochesTemp = [];
        foreach ($arrayCoches as $index=>$coche){
            if($coche->getMatricula() != '2666KVD'){
                array_push($arrayCochesTemp, $coche);
            } 
        }
        $arrayCoches =  $arrayCochesTemp;*/

        $arrayCochesTemp = [];
        foreach ($arrayCoches as $index=>$coche){
            if($coche->getMatricula() == '2666KVA'){
                $coche->setMatricula('2222AAA');
            } 
        }
            //$arrayCoches =  $arrayCochesTemp;

    echo "". PHP_EOL;
    echo "". PHP_EOL;

    for($i = 0; $i < count($arrayCoches); $i++){
        $arrayCoches[$i]->toString();
    }
    echo "". PHP_EOL;
    echo "". PHP_EOL;

    foreach ($arrayCoches as $index=>$coche){
        if($coche->getComustible() == Comustible::gasolina){
           echo "Esta marca tiene comustible: " . $coche->getComustible()->value . ", " .  $coche->getMarca() . PHP_EOL;
        } 
    }





