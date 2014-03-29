<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "files_index".
 *
 * @property integer $file_id
 * @property string $word
 * @property integer $word_placement
 */
class FilesIndex extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files_index';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id', 'word_placement'], 'integer'],
            [['word'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'file_id' => \Yii::t('vendor/dinhtrung/project/FilesIndex', 'File ID'),
            'word' => \Yii::t('vendor/dinhtrung/project/FilesIndex', 'Word'),
            'word_placement' => \Yii::t('vendor/dinhtrung/project/FilesIndex', 'Word Placement'),
        ];
    }
}
