<?php
$carro = array('Santos' => array('Bairros' => 79, 'Ruas' => 200, 'habitantes' => 433,656),
                'Guarujá' => array ('Bairros' => 73, 'Ruas' => 200, 'acessório' => 'pintura saia e blusa'),
                'Eelina' => array ('ano' => 1981, 'marca' => 'Ford', 'acessório' => 'Radio AM'),
                'Elba' => array ('ano' => 1996, 'marca' => 'Fiat', 'acessório' => 'empêchement de um presidente')
);
echo nl2br ($carro['Elba']['acessório']."\n");
?>