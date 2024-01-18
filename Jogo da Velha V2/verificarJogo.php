<?php

function verificarJogo(array $tabuleiro, string $player): bool
{
    return
        ($tabuleiro[0] === $player && $tabuleiro[1] === $player && $tabuleiro[2] === $player)||
        ($tabuleiro[3] === $player && $tabuleiro[4] === $player && $tabuleiro[5] === $player)||
        ($tabuleiro[6] === $player && $tabuleiro[7] === $player && $tabuleiro[8] === $player)||
        ($tabuleiro[0] === $player && $tabuleiro[3] === $player && $tabuleiro[6] === $player)||
        ($tabuleiro[1] === $player && $tabuleiro[4] === $player && $tabuleiro[7] === $player)||
        ($tabuleiro[2] === $player && $tabuleiro[5] === $player && $tabuleiro[8] === $player)||
        ($tabuleiro[0] === $player && $tabuleiro[4] === $player && $tabuleiro[8] === $player)||
        ($tabuleiro[2] === $player && $tabuleiro[4] === $player && $tabuleiro[6] === $player);
    
}