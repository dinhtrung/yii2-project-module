<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "project_departments".
 *
 * @property integer $project_id
 * @property integer $department_id
 */
class ProjectDepartments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'department_id'], 'required'],
            [['project_id', 'department_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => \Yii::t('vendor/dinhtrung/project/ProjectDepartments', 'Project ID'),
            'department_id' => \Yii::t('vendor/dinhtrung/project/ProjectDepartments', 'Department ID'),
        ];
    }
}
