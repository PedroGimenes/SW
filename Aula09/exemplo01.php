<?php
    include_once 'Pessoa.class.php';

    // Instanciar um objeto (Nova pessoa!!!)
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    // Atribuir alguns valores
    $pessoa1->Nome = 'Fulano da Silva';
    $pessoa1->Peso = 85.3;
    $pessoa1->Altura = 1.82;

    $pessoa2->Nome = 'Maria';
    $pessoa2->Peso = 50.0;
    $pessoa2->Altura = 1.55;

    // Chamando um método de classe pessoa
    $pessoa1->MostrarDados();
    $pessoa2->MostrarDados();



?>