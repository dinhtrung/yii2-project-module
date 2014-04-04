<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "event_queue".
 *
 * @property integer $id
 * @property integer $start
 * @property string $type
 * @property integer $repeat_interval
 * @property integer $repeat_count
 * @property string $data
 * @property string $callback
 * @property integer $owner
 * @property integer $origin_id
 * @property string $module
 * @property integer $batched
 */
class EventQueue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_queue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start', 'repeat_interval', 'repeat_count', 'owner', 'origin_id', 'batched'], 'integer'],
            [['data'], 'required'],
            [['data'], 'string'],
            [['type', 'module'], 'string', 'max' => 40],
            [['callback'], 'string', 'max' => 127]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'ID'),
            'start' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Start'),
            'type' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Type'),
            'repeat_interval' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Repeat Interval'),
            'repeat_count' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Repeat Count'),
            'data' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Data'),
            'callback' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Callback'),
            'owner' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Owner'),
            'origin_id' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Origin ID'),
            'module' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Module'),
            'batched' => \Yii::t('vendor/dinhtrung/project/EventQueue', 'Batched'),
        ];
    }
}
