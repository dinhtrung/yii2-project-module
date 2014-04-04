<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "log".
 *
 * @property integer $log_id
 * @property integer $log_task
 * @property string $log_name
 * @property string $log_description
 * @property integer $log_creator
 * @property double $log_hours
 * @property string $log_date
 * @property string $log_costcode
 * @property integer $log_problem
 * @property integer $log_reference
 * @property string $log_related_url
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['log_task', 'log_creator', 'log_problem', 'log_reference'], 'integer'],
            [['log_description'], 'string'],
            [['log_hours'], 'number'],
            [['log_date'], 'safe'],
            [['log_name', 'log_related_url'], 'string', 'max' => 255],
            [['log_costcode'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => \Yii::t('vendor/dinhtrung/project/Log', 'Log ID'),
            'log_task' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Task'),
            'log_name' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Name'),
            'log_description' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Description'),
            'log_creator' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Creator'),
            'log_hours' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Hours'),
            'log_date' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Date'),
            'log_costcode' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Costcode'),
            'log_problem' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Problem'),
            'log_reference' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Reference'),
            'log_related_url' => \Yii::t('vendor/dinhtrung/project/Log', 'Log Related Url'),
        ];
    }
}
