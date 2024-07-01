<?php
$cursos = array("ADS", "CD", "ADS", "ADS", "CD", "CD", "ADS");

$situacao = array(
    "Nome" => "Pedro",
    "Idade" => 30,
    "Curso" => "ADS",
    "Média" => 7.0,
);


// Exibição letra A
echo "<table border='1'>";
echo "<tr>";
foreach ($cursos as $value) {
    echo "<td>" . $value . "</td>";
}
echo "</tr>";
echo "</table>";

// Exibição letra B
echo "<table border='1'>";
foreach ($situacao as $key => $value) {
    echo "<tr><th>" . $key . "</th><td>" . $value . "</td></tr>";
}
echo "</table>";
?>
