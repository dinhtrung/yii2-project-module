<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "tasks".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent
 * @property integer $milestone
 * @property integer $project
 * @property integer $owner
 * @property string $start_date
 * @property double $duration
 * @property integer $duration_type
 * @property double $hours_worked
 * @property string $end_date
 * @property integer $status
 * @property integer $priority
 * @property integer $percent_complete
 * @property string $description
 * @property string $target_budget
 * @property string $related_url
 * @property integer $creator
 * @property integer $order
 * @property integer $client_publish
 * @property integer $dynamic
 * @property integer $access
 * @property integer $notify
 * @property string $departments
 * @property string $contacts
 * @property string $custom
 * @property integer $type
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'milestone', 'project', 'owner', 'duration_type', 'status', 'priority', 'percent_complete', 'creator', 'order', 'client_publish', 'dynamic', 'access', 'notify', 'type'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['duration', 'hours_worked', 'target_budget'], 'number'],
            [['description', 'custom'], 'string'],
            [['name', 'related_url'], 'string', 'max' => 255],
            [['departments', 'contacts'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Tasks', 'ID'),
            'name' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Name'),
            'parent' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Parent'),
            'milestone' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Milestone'),
            'project' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Project'),
            'owner' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Owner'),
            'start_date' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Start Date'),
            'duration' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Duration'),
            'duration_type' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Duration Type'),
            'hours_worked' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Hours Worked'),
            'end_date' => \Yii::t('vendor/dinhtrung/project/Tasks', 'End Date'),
            'status' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Status'),
            'priority' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Priority'),
            'percent_complete' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Percent Complete'),
            'description' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Description'),
            'target_budget' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Target Budget'),
            'related_url' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Related Url'),
            'creator' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Creator'),
            'order' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Order'),
            'client_publish' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Client Publish'),
            'dynamic' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Dynamic'),
            'access' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Access'),
            'notify' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Notify'),
            'departments' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Departments'),
            'contacts' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Contacts'),
            'custom' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Custom'),
            'type' => \Yii::t('vendor/dinhtrung/project/Tasks', 'Type'),
        ];
    }
}
