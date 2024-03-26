<?php
    $dataA = new DateTime();
    $dataB = new DateTime();
    $dataC = new DateTime();

    $dataB->setDate(2001, 6, 12);
    $dataB->setTime(8, 0, 0);

    if($dataA > $dataB){
        echo 'A data A é maior que a data B <br>';
    }
    else{
        echo 'A data B é maior que a data A <br>';
    }

    if($dataA == $dataC){
        echo 'A data A é igual a data C <br>';
    }

    $dataC->setDate(2001, 6, 12);
    $dataC->setTime(8, 0, 0);

    if($dataB == $dataC){
        echo 'A data B é igual a data C <br>';
    }