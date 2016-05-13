<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cart',
    'description' => 'Adds shopping cart(s) to your TYPO3 installation',
    'category' => 'plugin',
    'shy' => false,
    'version' => '0.6.1',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'beta',
    'uploadfolder' => false,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => true,
    'lockType' => '',
    'author' => 'Daniel Lorenz',
    'author_email' => 'ext.cart@extco.de',
    'author_company' => 'extco.de UG (haftungsbeschränkt)',
    'CGLcompliance' => null,
    'CGLcompliance_note' => null,
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-7.99.99',
            'php' => '5.4.0-7.0.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
