<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "task_departments".
 *
 * @property integer $task_id
 * @property integer $department_id
 */
class TaskDepartments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_id', 'department_id'], 'required'],
            [['task_id', 'department_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => \Yii::t('vendor/dinhtrung/project/TaskDepartments', 'Task ID'),
            'department_id' => \Yii::t('vendor/dinhtrung/project/TaskDepartments', 'Department ID'),
        ];
    }
}
