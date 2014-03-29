<?php

namespace vendor\dinhtrung\project\models;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $title
 * @property string $start_date
 * @property string $end_date
 * @property string $parent
 * @property string $description
 * @property string $times_recuring
 * @property string $recurs
 * @property string $remind
 * @property string $icon
 * @property integer $owner
 * @property integer $project
 * @property integer $private
 * @property integer $type
 * @property integer $cwd
 * @property integer $notify
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date'], 'safe'],
            [['parent', 'times_recuring', 'recurs', 'remind', 'owner', 'project', 'private', 'type', 'cwd', 'notify'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['icon'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Events', 'ID'),
            'title' => \Yii::t('vendor/dinhtrung/project/Events', 'Title'),
            'start_date' => \Yii::t('vendor/dinhtrung/project/Events', 'Start Date'),
            'end_date' => \Yii::t('vendor/dinhtrung/project/Events', 'End Date'),
            'parent' => \Yii::t('vendor/dinhtrung/project/Events', 'Parent'),
            'description' => \Yii::t('vendor/dinhtrung/project/Events', 'Description'),
            'times_recuring' => \Yii::t('vendor/dinhtrung/project/Events', 'Times Recuring'),
            'recurs' => \Yii::t('vendor/dinhtrung/project/Events', 'Recurs'),
            'remind' => \Yii::t('vendor/dinhtrung/project/Events', 'Remind'),
            'icon' => \Yii::t('vendor/dinhtrung/project/Events', 'Icon'),
            'owner' => \Yii::t('vendor/dinhtrung/project/Events', 'Owner'),
            'project' => \Yii::t('vendor/dinhtrung/project/Events', 'Project'),
            'private' => \Yii::t('vendor/dinhtrung/project/Events', 'Private'),
            'type' => \Yii::t('vendor/dinhtrung/project/Events', 'Type'),
            'cwd' => \Yii::t('vendor/dinhtrung/project/Events', 'Cwd'),
            'notify' => \Yii::t('vendor/dinhtrung/project/Events', 'Notify'),
        ];
    }
}
