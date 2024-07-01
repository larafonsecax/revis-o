<?php
$dados = [
    ["Nome" => "Maria", "Curso" => "ADS", "Media" => 7.0],
    ["Nome" => "João", "Curso" => "CD", "Media" => 5.0],
    ["Nome" => "José", "Curso" => "CD", "Media" => 8.0],
    ["Nome" => "Pedro", "Curso" => "ADS", "Media" => 1.5],
    ["Nome" => "Paulo", "Curso" => "ADS", "Media" => 6.0],
  ];
  
  foreach($dados as &$linha){
    if ($linha["Media"] < 2) {
      $linha["Situacao"] = "Reprovado";
    } elseif ($linha["Media"] >= 6) {
      $linha["Situacao"] = "Aprovado";
    } else {
      $linha["Situacao"] = "Exame Final";
    }
  }
  
  echo '<table border="1">';
  echo '<tr><th>Nome</th><th>Curso</th><th>Media</th><th>Situacao</th></tr>';
  
  foreach($dados as $linha){
    echo '<tr>';
    foreach($linha as $v){
      echo "<td>$v</td>";
    }
    echo '</tr>';
  }
  
  $situacao_por_curso = ["ADS" => ["Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0], "CD" => ["Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0]];
  
  foreach($dados as $linha){
   $situacao_por_curso[$linha["Curso"]][$linha["Situacao"]]++;
  }
?>
