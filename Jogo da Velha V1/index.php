<?php

do {
    $player1 = readline("\n Digite o nome do jogador 1(X): ");
    $player2 = readline(" Digite o nome do jogador 2(O): ");
    $player = 'X';

    $tabuleiro = [
        '.','.','.',
        '.','.','.',
        '.','.','.',
    ];

    $winner = null;

    while($winner === null){
        echo <<<EOL

            Posições: | Tabuleiro
                      |
              0|1|2   |   $tabuleiro[0]|$tabuleiro[1]|$tabuleiro[2]
              3|4|5   |   $tabuleiro[3]|$tabuleiro[4]|$tabuleiro[5]
              6|7|8   |   $tabuleiro[6]|$tabuleiro[7]|$tabuleiro[8]

            EOL;
        
        $posicao = (int) readline(" Jogador $player, digite onde você quer jogar: ");
        if($posicao<0||$posicao>8){
            echo "\n Posição inexistente, tente novamente.\n";
            continue;
        }

        if($tabuleiro[$posicao]!=="."){
            echo "\n Posição ocupada, tente novamente.\n";
            continue;
        }

        $tabuleiro[$posicao]=$player;

        if(
            ($tabuleiro[0] === 'O' && $tabuleiro[1] === 'O' && $tabuleiro[2] === 'O')||
            ($tabuleiro[3] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[5] === 'O')||
            ($tabuleiro[6] === 'O' && $tabuleiro[7] === 'O' && $tabuleiro[8] === 'O')||
            ($tabuleiro[0] === 'O' && $tabuleiro[3] === 'O' && $tabuleiro[6] === 'O')||
            ($tabuleiro[1] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[7] === 'O')||
            ($tabuleiro[2] === 'O' && $tabuleiro[5] === 'O' && $tabuleiro[8] === 'O')||
            ($tabuleiro[0] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[8] === 'O')||
            ($tabuleiro[2] === 'O' && $tabuleiro[4] === 'O' && $tabuleiro[6] === 'O')
        ){
            $winner = 'O';
            break;
        }

        if(
            ($tabuleiro[0] === 'X' && $tabuleiro[1] === 'X' && $tabuleiro[2] === 'X')||
            ($tabuleiro[3] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[5] === 'X')||
            ($tabuleiro[6] === 'X' && $tabuleiro[7] === 'X' && $tabuleiro[8] === 'X')||
            ($tabuleiro[0] === 'X' && $tabuleiro[3] === 'X' && $tabuleiro[6] === 'X')||
            ($tabuleiro[1] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[7] === 'X')||
            ($tabuleiro[2] === 'X' && $tabuleiro[5] === 'X' && $tabuleiro[8] === 'X')||
            ($tabuleiro[0] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[8] === 'X')||
            ($tabuleiro[2] === 'X' && $tabuleiro[4] === 'X' && $tabuleiro[6] === 'X')
        ){
            $winner = 'X';
            break;
        }

        if(!in_array('.', $tabuleiro)){
            break;
        }

        if($player==='X'){
            $player='O';
        } else{
            $player= 'X';
        }
    }

    if($winner==='X'){
        echo "\n O vencedor foi: $player1!\n";
    } elseif($winner==='O'){
        echo "\n O vencedor foi: $player2!\n";
    } else{
        echo "\n O jogo acabou em empate!\n";
    }

    $playagain = filter_var(
        readline("\n Deseja jogar novamente(True/False)? "),
        FILTER_VALIDATE_BOOLEAN
    );

} while ($playagain==true);
