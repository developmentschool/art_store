<?php
return [
    'layout' => 'main',
    'components' => [
        'view' => [
            'class' => \yii\web\View::className(),
        ],
    ],
    'modules' => [
        'rbac' => [
            'class' => 'rbac\Rbac',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'rbac\controllers\AssignmentController',
                    'searchClass' => [
                        'class' => 'rbac\models\search\AssignmentSearch',
                        'pageSize' => 10,
                    ],
                    'gridViewColumns' => [
                        'id',
                        'username',
                        'email'
                    ],
                    'otherFilters' => [
                        ['status' => \app\models\User::STATUS_ACTIVE],
                    ]
                ],
            ],
        ],
    ]
];