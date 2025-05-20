<?php
include 'conexao.php';

$sql = "SELECT * FROM Agendamento";
$result = $conexao->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>ID: " . $row["idAgendamento"] . " | Data Aluguel: " . $row["Data_Aluguel"] . " | Data Devolução: " . $row["Data_Devolucao"] . "</p>";
    }
} else {
    echo "<p>Nenhum agendamento encontrado.</p>";
}
?>g