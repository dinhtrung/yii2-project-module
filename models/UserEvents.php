<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "user_events".
 *
 * @property integer $user_id
 * @property integer $event_id
 */
class UserEvents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'event_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => \Yii::t('vendor/dinhtrung/project/UserEvents', 'User ID'),
            'event_id' => \Yii::t('vendor/dinhtrung/project/UserEvents', 'Event ID'),
        ];
    }
}
