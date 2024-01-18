<?php

function getPlayersName(): array
{
    echo "\n";
    $nameOne = readline(' Player 1(' . PLAYER_ONE_ICON .') - Digite o seu Nome: ');
    $nameTwo = readline(' Player 2(' . PLAYER_TWO_ICON .') - Digite o seu Nome: ');

    return [$nameOne , $nameTwo];
}