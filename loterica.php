<?php

function CriarJogo($DezenasMin, $DezenasMax, $TotalDezenas, $SortMin, $SortMax)
{
    $aposta = [];

    while (count($aposta) < $TotalDezenas) {
        $numero = rand($SortMin, $SortMax);

        if (!in_array($numero, $aposta)) {
            $aposta[] = $numero;
        }
    }

    sort($aposta); 

    return $aposta;
}

function ValidarJogo($TotalDezenas, $DezenasMin, $DezenasMax)
{ 
    if ($TotalDezenas < $DezenasMin || $TotalDezenas > $DezenasMax) {
        echo "Número de dezenas fora do intervalo permitido. Escolha entre $DezenasMin e $DezenasMax dezenas.\n";
        return false;
    }
    return true;
}

function ValorAposta($NumeroJogos, $CustoApostaMin)
{
    return $NumeroJogos * $CustoApostaMin;
}

print "\n\nLOTÉRICA MILIONÁRIA DO LUCAS\n";

$OpcoesJogo = ["Mega-Sena", "Quina", "Lotomania", "Lotofácil"];

foreach ($OpcoesJogo as $number => $Jogo){
    $number += 1;
    print "$number. $Jogo\n";
} 

$Escolha = readline("Qual jogo você deseja escolher (Informe o número): ");
$JogoEscolhido = $OpcoesJogo[$Escolha - 1];
$DezenasMin = 0;
$DezenasMax = 0;
$GastoJogo = 0;

if ($Escolha < 1 || $Escolha > 5){
    echo "Opção não permitida. Tente Novamente!";
}
elseif ($Escolha == 1){
    $DezenasMin = 6;
    $DezenasMax = 20;
    $SortMin = 1;
    $SortMax = 60;

    print("\n$JogoEscolhido");
    $NumeroJogos = readline("\n\nQuantos jogos você deseja fazer:");
    $TotalDezenas = readline("Quantas dezenas por aposta deseja fazer (Mín $DezenasMin/Máx $DezenasMax): ");

    if (!ValidarJogo($TotalDezenas, $DezenasMin, $DezenasMax)){
        exit;
    }
    
    $CustoApostaMin = 5.0;

    if ($TotalDezenas == 7){
    $CustoApostaMin = 35.0;
    }
    elseif ($TotalDezenas == 8){
    $CustoApostaMin = 140.0;
    }  
    elseif ($TotalDezenas == 9){
    $CustoApostaMin = 420.0;
    }  
    elseif ($TotalDezenas == 10){
    $CustoApostaMin = 1050.0;
    }  
    elseif ($TotalDezenas == 11){
    $CustoApostaMin = 2310.0;
    }  
    elseif ($TotalDezenas == 12){
    $CustoApostaMin = 4620.0;
    }  
    elseif ($TotalDezenas == 13){
    $CustoApostaMin = 8580.0;
    }  
    elseif ($TotalDezenas == 14){
    $CustoApostaMin = 15015.0;
    }
    elseif ($TotalDezenas == 15){
    $CustoApostaMin = 25025.0;
    }
    elseif ($TotalDezenas == 16){
    $CustoApostaMin = 40040.0;
    }
    elseif ($TotalDezenas == 17){
    $CustoApostaMin = 61880.0;
    }
    elseif ($TotalDezenas == 18){
    $CustoApostaMin = 92820.0 ;
    }     
    elseif ($TotalDezenas == 19){
    $CustoApostaMin = 135660.00;
    } 
    elseif ($TotalDezenas == 20){
    $CustoApostaMin = 193800.00 ;
    }          

    echo "\nApostas geradas para $JogoEscolhido:\n";
    $TotalGasto = 0;

    for ($i = 1; $i <= $NumeroJogos; $i++){
        $aposta = CriarJogo($DezenasMin, $DezenasMax, $TotalDezenas, $SortMin, $SortMax);
        $GastoJogo = ValorAposta(1, $CustoApostaMin);
        $TotalGasto += $GastoJogo;

        echo "Aposta $i: " .implode(', ', $aposta). " - Custo: R$$GastoJogo\n";
    }
    echo "\nValor total do jogo: R$$TotalGasto\n";
}
elseif ($Escolha == 2){
    $DezenasMin = 5;
    $DezenasMax = 15;
    $SortMin = 1;
    $SortMax = 80;


    print("\n$JogoEscolhido");
    $NumeroJogos = readline("\n\nQuantos jogos você deseja fazer:");
    $TotalDezenas = readline("Quantas dezenas por aposta deseja fazer (Mín $DezenasMin/Máx $DezenasMax): ");

    if (!ValidarJogo($TotalDezenas, $DezenasMin, $DezenasMax)){
        exit;
    }
    
    $CustoApostaMin = 2.5;

    if ($TotalDezenas == 6){
    $CustoApostaMin *= 15.0;
    }
    elseif ($TotalDezenas == 7){
    $CustoApostaMin *= 52.50;
    }  
    elseif ($TotalDezenas == 8){
    $CustoApostaMin *= 140.0;
    }  
    elseif ($TotalDezenas == 9){
    $CustoApostaMin *= 315.5;
    }  
    elseif ($TotalDezenas == 10){
    $CustoApostaMin *= 630;
    }  
    elseif ($TotalDezenas == 11){
    $CustoApostaMin *= 1155.0;
    }  
    elseif ($TotalDezenas == 12){
    $CustoApostaMin *= 1980.0;
    }  
    elseif ($TotalDezenas == 13){
    $CustoApostaMin *= 3127.5;
    }
    elseif ($TotalDezenas == 14){
    $CustoApostaMin *= 5005.0;
    }   
    elseif ($TotalDezenas == 15){
    $CustoApostaMin *= 7507.50;
    }           

    echo "\nApostas geradas para $JogoEscolhido:\n";
    $TotalGasto = 0;

    for ($i = 1; $i <= $NumeroJogos; $i++){
        $aposta = CriarJogo($DezenasMin, $DezenasMax, $TotalDezenas, $SortMin, $SortMax);
        $GastoJogo = ValorAposta(1, $CustoApostaMin);
        $TotalGasto += $GastoJogo;

        echo "Aposta $i: " .implode(', ', $aposta). " - Custo: R$$GastoJogo\n";
    }
    echo "\nValor total do jogo: R$$TotalGasto\n";
}
elseif ($Escolha == 3){
    $DezenasMin = 50;
    $DezenasMax = 50;
    print("\n$JogoEscolhido");
    $NumeroJogos = readline("\n\nQuantos jogos você deseja fazer:");
    $TotalDezenas = readline("Quantas dezenas por aposta deseja fazer (Mín $DezenasMin/Máx $DezenasMax): ");

    if (!ValidarJogo($TotalDezenas, $DezenasMin, $DezenasMax)){
        exit;
    }
    
    $CustoApostaMin = 3.0;           

    echo "\nApostas geradas para $JogoEscolhido:\n";
    $TotalGasto = 0;

    for ($i = 1; $i <= $NumeroJogos; $i++){
        $aposta = CriarJogo($DezenasMin, $DezenasMax, $TotalDezenas, $SortMin, $SortMax);
        $GastoJogo = ValorAposta(1, $CustoApostaMin);
        $TotalGasto += $GastoJogo;

        echo "Aposta $i: " .implode(', ', $aposta). " - Custo: R$$GastoJogo\n";
    }
    echo "\nValor total do jogo: R$$TotalGasto\n";
}
elseif ($Escolha == 4){
    $DezenasMin = 15;
    $DezenasMax = 20;
    $SortMin = 1;
    $SortMax = 25;


    print("\n$JogoEscolhido");
    $NumeroJogos = readline("\n\nQuantos jogos você deseja fazer:");
    $TotalDezenas = readline("Quantas dezenas por aposta deseja fazer (Mín $DezenasMin/Máx $DezenasMax): ");

    if (!ValidarJogo($TotalDezenas, $DezenasMin, $DezenasMax)){
        exit;
    }
    
    $CustoApostaMin = 3.0;

    if ($TotalDezenas == 16){
    $CustoApostaMin *= 48.0;
    }
    elseif ($TotalDezenas == 17){
    $CustoApostaMin *= 408.0;
    }  
    elseif ($TotalDezenas == 18){
    $CustoApostaMin *= 2448.0;
    }  
    elseif ($TotalDezenas == 19){
    $CustoApostaMin *= 11628.0;
    }  
    elseif ($TotalDezenas == 20){
    $CustoApostaMin *= 46512.0;
    }

    echo "\nApostas geradas para $JogoEscolhido:\n";
    $TotalGasto = 0;

    for ($i = 1; $i <= $NumeroJogos; $i++){
        $aposta = CriarJogo($DezenasMin, $DezenasMax, $TotalDezenas, $SortMin, $SortMax);
        $GastoJogo = ValorAposta(1, $CustoApostaMin);
        $TotalGasto += $GastoJogo;

        echo "Aposta $i: " .implode(', ', $aposta). " - Custo: R$$GastoJogo\n";
    }
    echo "\nValor total do jogo: R$$TotalGasto\n";
}
