<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '(Sudhaus7) XLS Importer',
    'description' => 'A simple importer to import data into the database',
    'category' => 'module',

    'version' => '5.0.2',
    'state' => 'stable',
    'uploadfolder' => 1,
    'clearcacheonload' => 0,
    'author' => 'Frank Berger, Markus Hofmann & Daniel Simon',
    'author_email' => 'fberger@sudhaus7.de',
    'author_company' => 'Sudhaus7, a label of B-Factor GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SUDHAUS7\\Xlsimport\\' => 'Classes',
            'ZipStream\\' => 'vendor/maennchen/zipstream-php/src',
            'Symfony\\Polyfill\\Mbstring\\' => 'vendor/symfony/polyfill-mbstring',
            'Psr\\SimpleCache\\' => 'vendor/psr/simple-cache/src',
            'Psr\\Http\\Message\\' => 'vendor/psr/http-message/src',
            'PhpOffice\\PhpSpreadsheet\\' => 'vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet',
            'MyCLabs\\Enum\\' => 'vendor/myclabs/php-enum/src',
            'Matrix\\' => 'vendor/markbaker/matrix/classes/src',
            'Complex\\' => 'vendor/markbaker/complex/classes/src',
        ],
    ],
];
