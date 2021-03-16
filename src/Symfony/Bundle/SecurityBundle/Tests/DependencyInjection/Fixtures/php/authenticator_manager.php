<?php

$container->loadFromExtension('security', [
    'enable_authenticator_manager' => true,
    'firewalls' => [
        'main' => [
            'login_link' => [
                'check_route' => 'login_check',
                'check_post_only' => true,
                'signature_properties' => ['id', 'email'],
                'max_uses' => 1,
                'lifetime' => 3600,
                'used_link_cache' => 'cache.redis',
            ],
            'login_throttling' => [
                'limiter' => 'app.rate_limiter',
            ],
        ],
    ],
]);
