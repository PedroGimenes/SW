<?php
    include_once 'Livro.class.php';
    $livro = new Livro('Lusiadas', 'Camões', true);
    
    //echo "<pre>";
    //echo_dump($livro);
    //echo "<pre>";

    echo "Mostra o status de um livro <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";

    echo "Realizando um Empréstimo <br>";
    $livro->Emprestar();
    echo "<hr>";

    echo "Mostra o status de um livro <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";

    echo "Realizando um Empréstimo <br>";
    $livro->Emprestar();
    echo "<hr>";

    echo "Devolvendo um livro <br>";
    $livro->Devolver();
    echo "<hr>";

    echo "Mostra o status de um livro <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";






?>