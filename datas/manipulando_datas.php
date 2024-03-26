<?php
    // Um segundo parâmetro na função date pode alterar a data gerada
    // Esse segundo parâmetro pode vir da função strtotime que pega uma instrução de texto como '+2 days' e soma 2 dias a data gerada
    
    echo date('d/m/Y') . "<br>";
    echo date('d/m/Y', strtotime('-2 years')) . "<br>";
    echo date('d/m/Y', strtotime('3 years')) . "<br>";
    echo date('d/m/Y', strtotime('-25 days')) . "<br>";
    echo date('d/m/Y', strtotime('15 months')) . "<br>";
