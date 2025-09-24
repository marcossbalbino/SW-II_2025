<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();
    // var_dump($conta1);

    $conta1->Nome = "João";
    $conta1->Cpf = "221.154.889-02";
    // $conta1->Saldo = 1000;


    $conta1->ConsultarSaldo();
    echo "<hr>";


    echo $conta1->Depositar(100);
    echo "<hr>";


    echo $conta1->Sacar(500);
    echo "<hr>";

    echo $conta1->Sacar(2500);
    echo "<hr>";

    




?>