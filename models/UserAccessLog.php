<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "user_access_log".
 *
 * @property string $user_access_log_id
 * @property string $user_id
 * @property string $user_ip
 * @property string $date_time_in
 * @property string $date_time_out
 * @property string $date_time_last_action
 */
class UserAccessLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_access_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_ip'], 'required'],
            [['user_id'], 'integer'],
            [['date_time_in', 'date_time_out', 'date_time_last_action'], 'safe'],
            [['user_ip'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_access_log_id' => \Yii::t('vendor/dinhtrung/project/UserAccessLog', 'User Access Log ID'),
            'user_id' => \Yii::t('vendor/dinhtrung/project/UserAccessLog', 'User ID'),
            'user_ip' => \Yii::t('vendor/dinhtrung/project/UserAccessLog', 'User Ip'),
            'date_time_in' => \Yii::t('vendor/dinhtrung/project/UserAccessLog', 'Date Time In'),
            'date_time_out' => \Yii::t('vendor/dinhtrung/project/UserAccessLog', 'Date Time Out'),
            'date_time_last_action' => \Yii::t('vendor/dinhtrung/project/UserAccessLog', 'Date Time Last Action'),
        ];
    }
}
