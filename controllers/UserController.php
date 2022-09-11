<?php
include_once __DIR__ . '/../models/User.php';



class UserController extends CommonController
{
    protected string $path_views = 'user';

    public function actionGet(): bool
    {
        return $this->renderFile('get', [
            'user' => User::findOne(),
            'params' => 'Sergey',
        ]);
    }

    public function actionList(): bool
    {
        return $this->renderFile('list', [
            'users' => User::findAll(),
        ]);
    }
}