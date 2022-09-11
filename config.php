<?php
//
/**
 * ClassController:actionName
 *
 * ClassController -- Класс, находящийся в папке controllers
 * actionName -- Функция класса
 * : -- сапаратор (который делит две переменные в одной строке)
 */
$routing = [
    '/' => 'SiteController:index', /** @see SiteController */ /** @see SiteController::actionIndex() */
    '/foo' => 'FooController:index', /** @see FooController */ /** @see FooController::actionIndex() */
    
    '/record/index' => 'RecordController:index',
    
    
    '/api/v1/user/get' => 'UserController:get',
    '/api/v1/user/list' => 'UserController:list',

];