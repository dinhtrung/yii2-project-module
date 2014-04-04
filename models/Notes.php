<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "notes".
 *
 * @property string $id
 * @property string $author
 * @property string $module
 * @property string $record_id
 * @property string $category
 * @property string $title
 * @property string $body
 * @property string $date
 * @property double $hours
 * @property string $code
 * @property string $created
 * @property string $modified
 * @property string $modified_by
 */
class Notes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'module', 'record_id', 'category', 'modified_by'], 'integer'],
            [['body', 'modified'], 'required'],
            [['body'], 'string'],
            [['date', 'created', 'modified'], 'safe'],
            [['hours'], 'number'],
            [['title'], 'string', 'max' => 100],
            [['code'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Notes', 'ID'),
            'author' => \Yii::t('vendor/dinhtrung/project/Notes', 'Author'),
            'module' => \Yii::t('vendor/dinhtrung/project/Notes', 'Module'),
            'record_id' => \Yii::t('vendor/dinhtrung/project/Notes', 'Record ID'),
            'category' => \Yii::t('vendor/dinhtrung/project/Notes', 'Category'),
            'title' => \Yii::t('vendor/dinhtrung/project/Notes', 'Title'),
            'body' => \Yii::t('vendor/dinhtrung/project/Notes', 'Body'),
            'date' => \Yii::t('vendor/dinhtrung/project/Notes', 'Date'),
            'hours' => \Yii::t('vendor/dinhtrung/project/Notes', 'Hours'),
            'code' => \Yii::t('vendor/dinhtrung/project/Notes', 'Code'),
            'created' => \Yii::t('vendor/dinhtrung/project/Notes', 'Created'),
            'modified' => \Yii::t('vendor/dinhtrung/project/Notes', 'Modified'),
            'modified_by' => \Yii::t('vendor/dinhtrung/project/Notes', 'Modified By'),
        ];
    }
}
