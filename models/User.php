<?php

class User extends Model
{
    use TModel;

    protected static array $data = [
        [
            'name' => 'Ivan',
            'sur_name' => 'Ivanov'
        ], [
            'name' => 'Petr',
            'sur_name' => 'Petrov'
        ]
    ];
}