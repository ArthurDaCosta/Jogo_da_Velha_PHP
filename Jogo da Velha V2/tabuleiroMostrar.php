<?php

function tabuleiroMostrar(array $tabuleiro)
{
    echo <<<EOL

      Posições: | Tabuleiro
                |
        0|1|2   |   $tabuleiro[0]|$tabuleiro[1]|$tabuleiro[2]
        3|4|5   |   $tabuleiro[3]|$tabuleiro[4]|$tabuleiro[5]
        6|7|8   |   $tabuleiro[6]|$tabuleiro[7]|$tabuleiro[8]

    EOL
    ;
}