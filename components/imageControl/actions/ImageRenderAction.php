<?php


namespace app\components\imageControl\actions;


use yii\data\ActiveDataProvider;

class ImageRenderAction extends ImageBaseAction
{
    public function run($view, $id = null)
    {
        $model = $this->ownerClass::findOne($id);

        $dataProvider = new ActiveDataProvider(['query' => $model->getPictures()]);

        return $this->render($view, ['dataProvider' => $dataProvider, 'imageModel' => new $this->imageClass()]);
    }
}