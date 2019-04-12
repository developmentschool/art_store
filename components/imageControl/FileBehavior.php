<?php


namespace app\components\imageControl;


use app\components\CloudinaryComponent;
use Yii;
use yii\base\Behavior;
use yii\base\UnknownPropertyException;
use yii\db\ActiveRecord;
use yii\db\BaseActiveRecord;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 *
 *
 *  public function behaviors()
 *  {
 *      return [
 *          'mainImage' => [
 *              'class' => MainImageBehavior::class,
 *              'relationship' => 'pictures'
 *          ]
 *      ];
 *  }
 *
 *
 * Class FileBehavior
 * @package app\components\imageControl
 */
class FileBehavior extends Behavior
{
    /**
     * @var CloudinaryComponent
     */
    public $storage;

    /**
     * @var
     */
    public $folderName = '';

    /**
     * @var string name of virtual model's attribute, which will be used
     * to fetch file uploaded from the web form.
     * Use value of this attribute to create web form file input field.
     */
    public $fileAttribute = 'file';

    /**
     * @var string name of model's attribute, which will be used to store file extension.
     * Corresponding model's attribute should be a string type.
     */
    public $fileExtensionAttribute = 'ext';

    /**
     * @var string name of model's attribute, which will be used to store file title.
     * Corresponding model's attribute should be a string type.
     */
    public $fileTitleAttribute = 'title';

    /**
     * @var UploadedFile instance of [[UploadedFile]], allows to save file,
     * passed through the web form.
     */
    private $_uploadedFile;

    /**
     * @var bool indicates if behavior will attempt to fetch uploaded file automatically from the HTTP request.
     */
    public $autoFetchUploadedFile = true;


    /**
     * @var int index of the HTML input file field in case of tabular input (input name has format "ModelName[$i][file]").
     * Note: after owner is saved this property will be reset.
     */
    public $fileTabularInputIndex;


    /**
     * @return mixed
     */
    protected function getStorage()
    {
        return $this->storage;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->getStorage()->getImageUrl($this->getFullFileName());
    }

    /**
     * @inheritdoc
     */
    public function canGetProperty($name, $checkVars = true)
    {
        if (parent::canGetProperty($name, $checkVars)) {
            return true;
        }
        if ($this->owner === null) {
            return false;
        }
        return ($name === $this->fileAttribute);
    }

    /**
     * @inheritdoc
     */
    public function canSetProperty($name, $checkVars = true)
    {
        if (parent::canSetProperty($name, $checkVars)) {
            return true;
        }
        if ($this->owner === null) {
            return false;
        }
        return ($name === $this->fileAttribute);
    }

    /**
     * PHP getter magic method.
     * This method is overridden so that variation attributes can be accessed like properties.
     *
     * @param string $name property name
     * @return mixed property value
     * @throws UnknownPropertyException if the property is not defined
     */
    public function __get($name)
    {
        try {
            return parent::__get($name);
        } catch (UnknownPropertyException $exception) {
            if ($this->owner !== null) {
                if ($name === $this->fileAttribute) {
                    return $this->getUploadedFile();
                }
            }
            throw $exception;
        }
    }

    /**
     * PHP setter magic method.
     * This method is overridden so that variation attributes can be accessed like properties.
     * @param string $name property name
     * @param mixed $value property value
     * @throws UnknownPropertyException if the property is not defined
     */
    public function __set($name, $value)
    {
        try {
            parent::__set($name, $value);
        } catch (UnknownPropertyException $exception) {
            if ($this->owner !== null) {
                if ($name === $this->fileAttribute) {
                    $this->setUploadedFile($value);
                    return;
                }
            }
            throw $exception;
        }
    }

    /**
     * @param UploadedFile|string|null $uploadedFile related uploaded file
     */
    public function setUploadedFile($uploadedFile)
    {
        $this->_uploadedFile = $uploadedFile;
    }

    /**
     * @return UploadedFile|null related uploaded file
     */
    public function getUploadedFile()
    {
        if (!is_object($this->_uploadedFile)) {
            $this->_uploadedFile = $this->ensureUploadedFile($this->_uploadedFile);
        }
        return $this->_uploadedFile;
    }

    /**
     * Finds the uploaded through the web file, creating [[UploadedFile]] instance.
     * If parameter $fullFileName is passed, creates a mock up instance of [[UploadedFile]] from the local file,
     * passed with this parameter.
     * @param UploadedFile|string|null $uploadedFile - source full file name for the [[UploadedFile]] mock up.
     * @return UploadedFile|null uploaded file.
     */
    protected function ensureUploadedFile($uploadedFile = null)
    {
        if ($uploadedFile instanceof UploadedFile) {
            return $uploadedFile;
        }

        if (!empty($uploadedFile)) {
            return new UploadedFile([
                'name' => basename($uploadedFile),
                'tempName' => $uploadedFile,
                'type' => FileHelper::getMimeType($uploadedFile),
                'size' => filesize($uploadedFile),
                'error' => UPLOAD_ERR_OK
            ]);
        }

        if ($this->autoFetchUploadedFile) {
            $owner = $this->owner;
            $fileAttributeName = $this->fileAttribute;
            $tabularInputIndex = $this->fileTabularInputIndex;
            if ($tabularInputIndex !== null) {
                $fileAttributeName = "[{$tabularInputIndex}]{$fileAttributeName}";
            }
            $uploadedFile = UploadedFile::getInstance($owner, $fileAttributeName);
            if (is_object($uploadedFile)) {
                if (!$uploadedFile->getHasError() && !file_exists($uploadedFile->tempName)) {
                    // uploaded file has been already processed:
                    return null;
                } else {
                    return $uploadedFile;
                }
            }
        }

        return null;
    }

    /**
     * Declares events and the corresponding event handler methods.
     * @return array events (array keys) and the corresponding event handler methods (array values).
     */
    public function events()
    {
        return [
            BaseActiveRecord::EVENT_AFTER_INSERT => 'afterSave',
            BaseActiveRecord::EVENT_AFTER_UPDATE => 'afterSave',
            BaseActiveRecord::EVENT_AFTER_DELETE => 'afterDelete',
            BaseActiveRecord::EVENT_BEFORE_VALIDATE => 'beforeValidate',
        ];
    }

    public function beforeValidate()
    {
        /* @var $owner ActiveRecord */
        $owner = $this->owner;
        $title = Yii::$app->security->generateRandomString(10);
        $ext = $this->getUploadedFile()->getExtension();

        $owner->setAttributes([
            $this->fileTitleAttribute => $title,
            $this->fileExtensionAttribute => $ext
        ]);

        return true;
    }

    /**
     * This event raises after owner saved.
     * It saves uploaded file if it exists.
     * @param \yii\base\Event $event event instance.
     */
    public function afterSave($event)
    {
        $uploadedFile = $this->getUploadedFile();
        if (is_object($uploadedFile) && !$uploadedFile->getHasError()) {
            $this->saveFile($uploadedFile);
        }
        $this->setUploadedFile(null);
    }

    /**
     * This event raises before owner deleted.
     * It deletes related file.
     * @param \yii\base\Event $event event instance.
     */
    public function afterDelete($event)
    {
        $this->deleteFile();
    }

    /**
     * Removes file associated with the owner model.
     * @return bool success.
     */
    public function deleteFile()
    {
        $this->getStorage()->deleteImage($this->getFullFileName());
        return true;
    }

    /**
     * Associate new file with the owner model.
     * This method will determine new file version and extension, and will update the owner
     * model correspondingly.
     * @param string|UploadedFile $sourceFileNameOrUploadedFile file system path to source file or [[UploadedFile]] instance.
     * @param bool $deleteSourceFile determines would the source file be deleted in the process or not,
     * if null given file will be deleted if it was uploaded via POST.
     * @return bool save success.
     */
    public function saveFile($sourceFileNameOrUploadedFile, $deleteSourceFile = null)
    {
        $options = [
            "public_id" => $this->getFullFileName(),
            "overwrite" => TRUE
        ];
        $this->storage->uploadImage($sourceFileNameOrUploadedFile->tempName, $options);

        return true;
    }

    public function getFullFileName($name = null)
    {
        /* @var $owner ActiveRecord */
        $owner = $this->owner;
        return $this->folderName
            ? $this->folderName . '/' . $owner->getAttribute($this->fileTitleAttribute)
            : $owner->getAttribute($this->fileTitleAttribute);
    }

}