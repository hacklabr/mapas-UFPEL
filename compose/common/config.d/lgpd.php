<?php 

$routes = $config['routes'];
$routes['shortcuts']['termos-de-uso'] = ['lgpd','view', ['termos-de-uso']];

return [
    'module.LGPD' => [
        'termos-de-uso'=>[
            'title'=> 'Política de Privacidade, Termos de Uso e Autorização de Uso de Imagem', 
            'text'=> file_get_contents(__DIR__ . '/../lgpd-terms/terms-of-usage.html'),
            'buttonText' => 'Declaro que autorizo o uso de imagem e concordo com a Política de Privacidade, Termos de Uso e Autorização de Uso de Imagem da Plataforma Mapa Cultural AGIMOS'
        ],
    ],

    'routes' => $routes
];