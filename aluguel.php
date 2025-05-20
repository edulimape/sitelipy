<?php

include 'conexao.php';

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $DATAlu = $_POST['datret'];
    $DATDev = $_POST['datdev'];
    $CPFcli = $_POST['cpf'];
    $LIVEsc = $_POST['aluguel'];

    $execute_sql = "call cad_aluguel(?, ?, ?, ?)";

    if ($stmt = $conexao->prepare($execute_sql)){
        $stmt->bind_param("ssss", $DATAlu, $DATDev, $CPFcli, $LIVEsc);
        $stmt->execute();
        echo "cadastrado com sucesso!";
    } else {
        echo "falha ao cadastrar";
    }
    $stmt->close();
}
?>