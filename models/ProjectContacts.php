<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "project_contacts".
 *
 * @property integer $project_id
 * @property integer $contact_id
 */
class ProjectContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'contact_id'], 'required'],
            [['project_id', 'contact_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => \Yii::t('vendor/dinhtrung/project/ProjectContacts', 'Project ID'),
            'contact_id' => \Yii::t('vendor/dinhtrung/project/ProjectContacts', 'Contact ID'),
        ];
    }
}
