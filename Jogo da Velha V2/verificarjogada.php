<?php

function verificarJogada(int $posicao, array $tabuleiro):bool
{
    if($posicao<0||$posicao>8){
        echo "\n Posição inexistente, tente novamente.\n";
        return false;
    }
    
    if($tabuleiro[$posicao]!== BLANK_ICON){
        echo "\n Posição ocupada, tente novamente.\n";
        return false;
    }

    return true;
}

