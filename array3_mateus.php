<?php
$carro = array('Fusca' => array('ano' => 1977, 'marca' => 'Volkswagen', 'acessório' => 'Radio AM'),
                'Kombi' => array ('ano' => 1975, 'marca' => 'Volkswagen', 'acessório' => 'pintura saia e blusa'),
                'Eelina' => array ('ano' => 1981, 'marca' => 'Ford', 'acessório' => 'Radio AM'),
                'Elba' => array ('ano' => 1996, 'marca' => 'Fiat', 'acessório' => 'empêchement de um presidente')
);
echo nl2br ($carro['Elba']['acessório']."\n");
?>