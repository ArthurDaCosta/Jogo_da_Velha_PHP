<?php

function verificarCheio(array $tabuleiro): bool
{
    return !in_array(BLANK_ICON, $tabuleiro);
}