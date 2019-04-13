<?php


namespace app\components\imageControl\actions;

use yii\base\Action;
use yii\base\Exception;
use yii\db\ActiveRecord;
use function GuzzleHttp\Psr7\parse_query;


/**
 *
 *  public function actions()
 * {
 *      return [
 *          'image-delete' => [
 *              'class' => ImageDeleteAction::class,
 *              'ownerClass' => Product::class,
 *              'imageClass' => Picture::class
 *           ],
 *          'image-render' => [
 *              'class' => ImageRenderAction::class,
 *              'ownerClass' => Product::class,
 *              'imageClass' => Picture::class
 *           ],
 *          'image-add' => [
 *              'class' => ImageAddAction::class,
 *              'ownerClass' => Product::class,
 *              'imageClass' => Picture::class
 *           ],
 *      ];
 * }
 *
 *
 */
class ImageBaseAction extends Action
{
    public $viewPath = '@app/components/imageControl/actions/view/';

    /**
     * @var ActiveRecord
     */
    public $ownerClass;

    public $imageClass;


    public function render(string $view, array $params)
    {
        return $this->controller->renderPartial($this->viewPath . $view, $params);
    }

    protected function getOwnerId()
    {
        $ownerId = parse_query(parse_url(\Yii::$app->request->referrer)['query'])['id'];
        if (!$ownerId) {
            throw new Exception('error'); //TODO: Доработать обработку ошибки
        }
        return $ownerId;
    }

    protected function getOwnerName()
    {
        return strtolower(substr($this->ownerClass, strrpos($this->ownerClass, '\\') + 1));
    }
}