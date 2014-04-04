<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "files".
 *
 * @property integer $id
 * @property string $real_filename
 * @property integer $folder
 * @property integer $project
 * @property integer $task
 * @property string $name
 * @property integer $parent
 * @property string $description
 * @property string $type
 * @property integer $owner
 * @property string $date
 * @property integer $size
 * @property double $version
 * @property string $icon
 * @property integer $category
 * @property string $checkout
 * @property string $co_reason
 * @property integer $version_id
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['folder', 'project', 'task', 'parent', 'owner', 'size', 'category', 'version_id'], 'integer'],
            [['description', 'co_reason'], 'string'],
            [['date'], 'safe'],
            [['version'], 'number'],
            [['real_filename', 'name', 'checkout'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 100],
            [['icon'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Files', 'ID'),
            'real_filename' => \Yii::t('vendor/dinhtrung/project/Files', 'Real Filename'),
            'folder' => \Yii::t('vendor/dinhtrung/project/Files', 'Folder'),
            'project' => \Yii::t('vendor/dinhtrung/project/Files', 'Project'),
            'task' => \Yii::t('vendor/dinhtrung/project/Files', 'Task'),
            'name' => \Yii::t('vendor/dinhtrung/project/Files', 'Name'),
            'parent' => \Yii::t('vendor/dinhtrung/project/Files', 'Parent'),
            'description' => \Yii::t('vendor/dinhtrung/project/Files', 'Description'),
            'type' => \Yii::t('vendor/dinhtrung/project/Files', 'Type'),
            'owner' => \Yii::t('vendor/dinhtrung/project/Files', 'Owner'),
            'date' => \Yii::t('vendor/dinhtrung/project/Files', 'Date'),
            'size' => \Yii::t('vendor/dinhtrung/project/Files', 'Size'),
            'version' => \Yii::t('vendor/dinhtrung/project/Files', 'Version'),
            'icon' => \Yii::t('vendor/dinhtrung/project/Files', 'Icon'),
            'category' => \Yii::t('vendor/dinhtrung/project/Files', 'Category'),
            'checkout' => \Yii::t('vendor/dinhtrung/project/Files', 'Checkout'),
            'co_reason' => \Yii::t('vendor/dinhtrung/project/Files', 'Co Reason'),
            'version_id' => \Yii::t('vendor/dinhtrung/project/Files', 'Version ID'),
        ];
    }
}
