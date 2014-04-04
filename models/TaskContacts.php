<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "task_contacts".
 *
 * @property integer $task_id
 * @property integer $contact_id
 */
class TaskContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_id', 'contact_id'], 'required'],
            [['task_id', 'contact_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => \Yii::t('vendor/dinhtrung/project/TaskContacts', 'Task ID'),
            'contact_id' => \Yii::t('vendor/dinhtrung/project/TaskContacts', 'Contact ID'),
        ];
    }
}
