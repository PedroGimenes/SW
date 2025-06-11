<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Raphael",8,9);

    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();
    $nome = $fulano->getNome();

   //echo $nota1;

   $media = $fulano->Media($nota1,$nota2);
   echo "ALUNO: ". $nome . "<br>";
   echo "MÉDIA: ".$media ."<br>"; 
   echo "SITUAÇÃO: ".$fulano->VerificarSituacao($media);

   echo "<hr>"


    

?>