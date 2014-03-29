<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "user_task_pin".
 *
 * @property integer $user_id
 * @property integer $task_id
 * @property integer $task_pinned
 */
class UserTaskPin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_task_pin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'task_id', 'task_pinned'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => \Yii::t('vendor/dinhtrung/project/UserTaskPin', 'User ID'),
            'task_id' => \Yii::t('vendor/dinhtrung/project/UserTaskPin', 'Task ID'),
            'task_pinned' => \Yii::t('vendor/dinhtrung/project/UserTaskPin', 'Task Pinned'),
        ];
    }
}
