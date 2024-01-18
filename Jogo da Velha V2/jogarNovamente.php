<?php

function jogarNovamente()
{
    return (filter_var(
        readline("\n Deseja jogar novamente(True/False)? "),
        FILTER_VALIDATE_BOOLEAN
    ));
}