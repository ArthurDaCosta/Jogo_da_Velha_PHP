<?php

function mostrarVencedor(string $winner, array $players)
{
    if($winner === PLAYER_ONE_ICON){
        echo "\n O vencedor foi: $players[0]!\n";
    } elseif($winner === PLAYER_TWO_ICON){
        echo "\n O vencedor foi: $players[1]!\n";
    } else{
        echo "\n O jogo acabou em empate!\n";
    }
}