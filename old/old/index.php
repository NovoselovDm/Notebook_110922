<?php


# Подключаем файлы
include_once 'geometry/GeometryFigure.php';
include_once 'geometry/Rectangle.php';
include_once 'geometry/Sphere.php';

# Считываем необходимые нам значения GET
$params = [
    'figure' => $_GET['figure']
//    'action' => $_GET['action']
];

# Создаем Класс переданные из figure
/** @var GeometryFigure $figure */
$figure = new $params['figure']();


# Хочу данные перемитра и площади
echo $figure;