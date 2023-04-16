<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\User;

class UserController extends Controller
{
    public function actionIndex()
    {
        $query = User::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $users = $query
            ->joinWith(['role'])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->orderBy('id')
            ->all();

        return $this->render('index', [
            'users' => $users,
            'pagination' => $pagination,
        ]);
    }
}