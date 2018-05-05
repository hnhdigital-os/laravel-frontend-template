<?php

return [
    'header' => [
        'title' => '',
        'meta'  => [
            'charset'     => ['config' => ['noname' => true], 'charset' => 'utf-8'],
            'http-equiv'  => ['config' => ['noname' => true], 'http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge'],
            'viewport'    => ['content' => 'width=device-width, initial-scale=1'],
            'description' => ['content' => ''],
            'keywords'    => ['content' => ''],
            'author'      => ['content' => ''],
        ],
        'minimize' => true,
        'search'   => [
            'show'        => false,
            'placeholder' => 'Search...',
        ],
        'status'   => [
            'show' => true,
        ],
        'left-content' => '',
        'messages'     => [
            'show'  => false,
            'count' => 0,
        ],
        'notifications' => [
            'show'  => false,
            'count' => 0,
        ],
    ],
    'navigation' => [
        'profile' => [
            'show' => true,
        ],
    ],
    'content' => [
        'heading' => [
            'show'            => false,
            'title'           => '',
            'show-breadcrumb' => false,
            'breadcrumb'      => '',
            'right-side-text' => '',
        ],
    ],
    'tasks' => [
        'show' => false,
    ],
    'footer' => [
        'show'            => false,
        'left-side-text'  => '',
        'right-side-text' => '',
    ],
];
