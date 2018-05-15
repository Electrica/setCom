## setCom

Компонент предназначен для установки необходимых пакетов.

-------

Доступные пакеты:

```php
// Версия указана минимальная, ставит последнюю
$packages = [
    'Ace' => [
        'version' => '1.6.5-pl',
        'service_url' => 'modstore.pro',
    ],
    'pdoTools' => [
        'version' => '2.10.0-pl',
        'service_url' => 'modstore.pro',
    ],
    'FormIt' => [
        'version' => '1.0.0',
        'service_url' => 'modx.com'
    ],
    'AjaxForm' => [
        'version' => '1.0.0',
        'service_url' => 'modstore.pro'
    ],
    'miniShop2' => [
        'version' => '1.0.0',
        'service_url' => 'modstore.pro'
    ],
    'BannerY' => [
        'version' => '1.0.0',
        'service_url' => 'modstore.pro'
    ],
    'VersionX' => [
        'version' => '1.0.0',
        'service_url' => 'modx.com'
    ],
    'frontendManager' => [
        'version' => '1.0.0',
        'service_url' => 'modstore.pro'
    ],
    'translit' => [
        'version' => '1.0.0',
        'service_url' => 'modx.com'
    ],
    'TinyMCE Rich Text Editor' => [
        'version' => '1.0.0',
        'service_url' => 'modx.com'
    ]
];
```

Пакеты можете добавлять в _build/resolvers/setup.php
