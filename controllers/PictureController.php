<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\UploadForm;
use yii\web\UploadedFile;

class PictureController extends Controller
{
    public function actionIndex()
    {

        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->upload()) {
                // file is uploaded successfully
                return $this->redirect(\Yii::$app->request->getReferrer());
            }
        }

        return $this->render('index', ['model' => $model]);
    }

}
