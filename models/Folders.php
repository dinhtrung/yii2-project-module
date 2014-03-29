<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "folders".
 *
 * @property integer $folder_id
 * @property integer $folder_parent
 * @property string $folder_name
 * @property string $folder_description
 */
class Folders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'folders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['folder_parent'], 'integer'],
            [['folder_description'], 'string'],
            [['folder_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'folder_id' => \Yii::t('vendor/dinhtrung/project/Folders', 'Folder ID'),
            'folder_parent' => \Yii::t('vendor/dinhtrung/project/Folders', 'Folder Parent'),
            'folder_name' => \Yii::t('vendor/dinhtrung/project/Folders', 'Folder Name'),
            'folder_description' => \Yii::t('vendor/dinhtrung/project/Folders', 'Folder Description'),
        ];
    }
}
