<?php

class Record extends Model {
    
    use TModel;
    
    public static array $label = [
        'title' => 'Титульное название',
        'description' => 'Описание'
    ];


    protected static array $data = [
        [
            'title' => '123',
            'description' => 'ewqeqweqwe'
        ],
        [
            'title' => '123',
            'description' => 'ewqeqweqwe'
        ],
        [
            'title' => '123',
            'description' => 'ewqeqweqwe'
        ],
        [
            'title' => '123',
            'description' => 'ewqeqweqwe'
        ],
    ];
}