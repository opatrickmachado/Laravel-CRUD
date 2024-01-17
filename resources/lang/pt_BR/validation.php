<?php

return [
    'accepted'             => 'O campo :attribute deve ser aceito.',
    'active_url'           => 'O campo :attribute não é uma URL válida.',
    'after'                => 'O campo :attribute deve ser uma data posterior a :date.',

    'attributes' => [
        'title' => 'título',
        'date' => 'data',
        'city' => 'cidade',
        'private' => 'privacidade',
        'description' => 'descrição',
        'items' => 'itens',
        'image' => 'imagem',
    ],

    'custom' => [
        'title' => [
            'required' => 'O campo :attribute é obrigatório.',
        ],
        'date' => [
            'required' => 'O campo :attribute é obrigatório.',
            'date' => 'O campo :attribute deve ser uma data válida.',
        ],
        'city' => [
            'required' => 'O campo :attribute é obrigatório.',
        ],
        'private' => [
            'required' => 'O campo :attribute é obrigatório.',
            'boolean' => 'O campo :attribute deve ser verdadeiro (sim) ou falso (não).',
        ],
        'description' => [
            'required' => 'O campo :attribute é obrigatório.',
        ],
        'items' => [
            'required' => 'O campo :attribute é obrigatório.',
            'array' => 'O campo :attribute deve ser uma matriz.',
        ],
        'image' => [
            'required' => 'O campo :attribute é obrigatório.',
            'image' => 'O campo :attribute deve ser uma imagem válida.',
            'mimes' => 'O campo :attribute deve ser do tipo: :values.',
            'max' => [
                'file' => 'O campo :attribute não deve ter mais de :max kilobytes.',
            ],
        ],
    ],
];
