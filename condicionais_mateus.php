<?php
$salario = 800.70;
$tempo_serviço = 25;
$folga_fim_semana = false;

if (($tempo_serviço >= 20) and ($salario > 100.88) and ($folga_fim_semana != true)) {
    print_r ("dados errados do funcionario");
}
else if (($tempo_serviço == 25) and ($salario == 800.70) and ($folga_fim_semana != true)) {
    print_r ("dados corretos do funcionario");
}
print nl2br ("\ntenpo de serviço".$tempo_serviço."\nsalario R$ =".$salario. "\nfolga sabado e domingo: não".$folga_fim_semana);
?>