<title>Calcula o seu aniversário</title>

<?php

$diaHoje = strtotime(date('Y-m-d'));

$dataAniversario = strtotime(date('Y-07-05'));

echo "<hr>";

$tempoFalta = $dataAniversario - $diaHoje;

$tempoDia = 24*60*60;

$quantidadeDias = $tempoFalta / $tempoDia;

if ($quantidadeDias == 0) {
	echo "O seu aniversario é hoje!";
}elseif ($quantidadeDias == 1) {
	echo "O seu aniversário é amanhã!";
}elseif ($quantidadeDias > 1) {
	echo "Faltam $quantidadeDias dias para o seu aniversário!";
}else{
	echo "O seu aniversário já passou!";
}