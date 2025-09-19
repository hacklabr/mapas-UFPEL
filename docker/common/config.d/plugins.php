<?php

return [
    'plugins' => [
        'AdminLoginAsUser' => ['namespace' => 'AdminLoginAsUser'],
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'SpamDetector',
        'ValuersManagement',
        'Accessibility',
        'MapasBlame' => [
            'namespace' => 'MapasBlame',
            'config' => [
                'request.logData.PATCH' => function ($data) {
                    return $data;
                },
            ]
        ],
    ]
];