<?php

$idade = 16;
$numeroDePessoas = 1;

echo "Voce só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos.    Pode entrar.";
} else if ($idade >=16 && $numeroDePessoas > 1) {
    echo "Voce tem $idade anos, esta acompanhado(a), pode entrar";
} else {
    echo "Voce não pode entrar, voce tem $idade anos e não está acompanhado!";
}

echo PHP_EOL;
echo "Adeus!";