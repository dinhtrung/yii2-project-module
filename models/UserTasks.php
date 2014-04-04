<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "user_tasks".
 *
 * @property integer $user_id
 * @property integer $user_type
 * @property integer $task_id
 * @property integer $perc_assignment
 * @property integer $user_task_priority
 */
class UserTasks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_type', 'task_id', 'perc_assignment', 'user_task_priority'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => \Yii::t('vendor/dinhtrung/project/UserTasks', 'User ID'),
            'user_type' => \Yii::t('vendor/dinhtrung/project/UserTasks', 'User Type'),
            'task_id' => \Yii::t('vendor/dinhtrung/project/UserTasks', 'Task ID'),
            'perc_assignment' => \Yii::t('vendor/dinhtrung/project/UserTasks', 'Perc Assignment'),
            'user_task_priority' => \Yii::t('vendor/dinhtrung/project/UserTasks', 'User Task Priority'),
        ];
    }
}
