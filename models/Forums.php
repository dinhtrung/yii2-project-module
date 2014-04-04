<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "forums".
 *
 * @property integer $id
 * @property integer $project
 * @property integer $status
 * @property integer $owner
 * @property string $name
 * @property string $create_date
 * @property string $last_date
 * @property string $last_id
 * @property integer $message_count
 * @property string $description
 * @property integer $moderated
 */
class Forums extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forums';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project', 'status', 'owner', 'last_id', 'message_count', 'moderated'], 'integer'],
            [['create_date', 'last_date'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Forums', 'ID'),
            'project' => \Yii::t('vendor/dinhtrung/project/Forums', 'Project'),
            'status' => \Yii::t('vendor/dinhtrung/project/Forums', 'Status'),
            'owner' => \Yii::t('vendor/dinhtrung/project/Forums', 'Owner'),
            'name' => \Yii::t('vendor/dinhtrung/project/Forums', 'Name'),
            'create_date' => \Yii::t('vendor/dinhtrung/project/Forums', 'Create Date'),
            'last_date' => \Yii::t('vendor/dinhtrung/project/Forums', 'Last Date'),
            'last_id' => \Yii::t('vendor/dinhtrung/project/Forums', 'Last ID'),
            'message_count' => \Yii::t('vendor/dinhtrung/project/Forums', 'Message Count'),
            'description' => \Yii::t('vendor/dinhtrung/project/Forums', 'Description'),
            'moderated' => \Yii::t('vendor/dinhtrung/project/Forums', 'Moderated'),
        ];
    }
}
