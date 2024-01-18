<?php

require_once __DIR__ . "/constants.php";
require_once __DIR__ . "/variables.php";
require_once __DIR__ . "/getPlayersName.php";
require_once __DIR__ . "/tabuleiroBuild.php";
require_once __DIR__ . "/tabuleiroMostrar.php";
require_once __DIR__ . "/verificarjogada.php";
require_once __DIR__ . "/verificarJogo.php";
require_once __DIR__ . "/verificarCheio.php";
require_once __DIR__ . "/trocarJogador.php";
require_once __DIR__ . "/mostrarVencedor.php";
require_once __DIR__ . "/jogarNovamente.php";

do {
    $players = getPlayersName();
    $player = PLAYER_ONE_ICON;
    $tabuleiro = tabuleiroBuild();
    $winner = null;

    while($winner === null){
        tabuleiroMostrar($tabuleiro);
        
        $posicao = (int) readline(" Jogador $player, digite onde você quer jogar: ");
        if(!verificarJogada($posicao, $tabuleiro))
        {
            continue;
        }
        $tabuleiro[$posicao]=$player;
    
        if(verificarJogo($tabuleiro, PLAYER_ONE_ICON)){
            $winner=PLAYER_ONE_ICON;
        } elseif(verificarJogo($tabuleiro, PLAYER_TWO_ICON)){
            $winner=PLAYER_TWO_ICON;
        }

        if(verificarCheio($tabuleiro)){
            break;
        }

        $player=trocarJogador($player);
    }

    if(verificarCheio($tabuleiro)&&$winner==null)
    {
        $winner='empate';
    }

    tabuleiroMostrar($tabuleiro);
    mostrarVencedor($winner, $players);

    $playagain = jogarNovamente();
    echo "\n";

} while ($playagain==true);
