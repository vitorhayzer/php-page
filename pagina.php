<?php
date_default_timezone_set('America/Sao_Paulo');
// 1) diferença entre Y (4 dígitos) e y (2 dígitos)
echo "1) Data com Y: " . date('d/m/Y') . " | Data com y: " . date('d/m/y') . "<br><br>";

// 2)h minúsculo para 12h e A maiúsculos para o AM/PM
echo "2) Hora formato 12h: " . date('h:i:s A') . "<br><br>";

// 3) dia da semana "l" pro dia completo e "D" pra abreviação
echo "3) Dia da semana: " . date('l') . " (" . date('D') . ")<br><br>";

// 4) Dias faltando para o próximo sábado
$today = date('w'); // Dia atual (0=domingo, 6=sábado)
$daysUntilSaturday = (6 - $today + 7) % 7;
echo "4) Dias até o próximo sábado: " . $daysUntilSaturday . "<br><br>";

// 5) nome do mês atual, "F" pro nome completo e "M" pra abreviação
echo "5) Mês atual: " . date('F') . " (" . date('M') . ")<br><br>";

// tudo junto
echo "<strong>Informações completas:</strong><br>";
echo "Hoje é " . date('l') . ", " . date('d') . " de " . date('F') . " de " . date('Y') . "<br>";
echo "Hora atual: " . date('h:i:s A') . " (" . date('H:i:s') . " no formato 24h)<br>";
echo "Faltam " . $daysUntilSaturday . " dias para o próximo sábado.";
?>