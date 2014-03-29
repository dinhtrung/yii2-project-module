<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "task_dependencies".
 *
 * @property integer $task_id
 * @property integer $req_task_id
 */
class TaskDependencies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_dependencies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_id', 'req_task_id'], 'required'],
            [['task_id', 'req_task_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => \Yii::t('vendor/dinhtrung/project/TaskDependencies', 'Task ID'),
            'req_task_id' => \Yii::t('vendor/dinhtrung/project/TaskDependencies', 'Req Task ID'),
        ];
    }
}
