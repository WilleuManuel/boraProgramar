<title>Calcula o seu anivers�rio</title>

<?php

$diaHoje = strtotime(date('Y-m-d'));

$dataAniversario = strtotime(date('Y-07-05'));

echo "<hr>";

$tempoFalta = $dataAniversario - $diaHoje;

$tempoDia = 24*60*60;

$quantidadeDias = $tempoFalta / $tempoDia;

if ($quantidadeDias == 0) {
	echo "O seu aniversario � hoje!";
}elseif ($quantidadeDias == 1) {
	echo "O seu anivers�rio � amanh�!";
}elseif ($quantidadeDias > 1) {
	echo "Faltam $quantidadeDias dias para o seu anivers�rio!";
}else{
	echo "O seu anivers�rio j� passou!";
}