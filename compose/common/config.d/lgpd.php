<?php 
return [
    'module.LGPD' => [
        'termos-de-uso'=>[
            'title'=> 'Política de Privacidade, Termos de Uso e Autorização de Uso de Imagem', 
            'text'=> file_get_contents(__DIR__ . '/../lgpd-terms/terms-of-usage.html'),
            'buttonText' => 'Aceito os termos acima'
        ],
    ]
];