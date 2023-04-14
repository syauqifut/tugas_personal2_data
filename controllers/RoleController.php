<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Role;

class RoleController extends Controller
{
    public function actionIndex()
    {
        $query = Role::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $roles = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'roles' => $roles,
            'pagination' => $pagination,
        ]);
    }
}