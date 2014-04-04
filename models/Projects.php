<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property integer $company
 * @property integer $company_internal
 * @property integer $department
 * @property string $name
 * @property string $short_name
 * @property integer $owner
 * @property string $url
 * @property string $demo_url
 * @property string $start_date
 * @property string $end_date
 * @property integer $status
 * @property integer $percent_complete
 * @property string $color_identifier
 * @property string $description
 * @property string $target_budget
 * @property string $actual_budget
 * @property integer $creator
 * @property integer $private
 * @property string $departments
 * @property string $contacts
 * @property integer $priority
 * @property integer $type
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company', 'company_internal', 'department', 'owner', 'status', 'percent_complete', 'creator', 'private', 'priority', 'type'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['description'], 'string'],
            [['target_budget', 'actual_budget'], 'number'],
            [['name', 'url', 'demo_url'], 'string', 'max' => 255],
            [['short_name'], 'string', 'max' => 10],
            [['color_identifier'], 'string', 'max' => 6],
            [['departments', 'contacts'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Projects', 'ID'),
            'company' => \Yii::t('vendor/dinhtrung/project/Projects', 'Company'),
            'company_internal' => \Yii::t('vendor/dinhtrung/project/Projects', 'Company Internal'),
            'department' => \Yii::t('vendor/dinhtrung/project/Projects', 'Department'),
            'name' => \Yii::t('vendor/dinhtrung/project/Projects', 'Name'),
            'short_name' => \Yii::t('vendor/dinhtrung/project/Projects', 'Short Name'),
            'owner' => \Yii::t('vendor/dinhtrung/project/Projects', 'Owner'),
            'url' => \Yii::t('vendor/dinhtrung/project/Projects', 'Url'),
            'demo_url' => \Yii::t('vendor/dinhtrung/project/Projects', 'Demo Url'),
            'start_date' => \Yii::t('vendor/dinhtrung/project/Projects', 'Start Date'),
            'end_date' => \Yii::t('vendor/dinhtrung/project/Projects', 'End Date'),
            'status' => \Yii::t('vendor/dinhtrung/project/Projects', 'Status'),
            'percent_complete' => \Yii::t('vendor/dinhtrung/project/Projects', 'Percent Complete'),
            'color_identifier' => \Yii::t('vendor/dinhtrung/project/Projects', 'Color Identifier'),
            'description' => \Yii::t('vendor/dinhtrung/project/Projects', 'Description'),
            'target_budget' => \Yii::t('vendor/dinhtrung/project/Projects', 'Target Budget'),
            'actual_budget' => \Yii::t('vendor/dinhtrung/project/Projects', 'Actual Budget'),
            'creator' => \Yii::t('vendor/dinhtrung/project/Projects', 'Creator'),
            'private' => \Yii::t('vendor/dinhtrung/project/Projects', 'Private'),
            'departments' => \Yii::t('vendor/dinhtrung/project/Projects', 'Departments'),
            'contacts' => \Yii::t('vendor/dinhtrung/project/Projects', 'Contacts'),
            'priority' => \Yii::t('vendor/dinhtrung/project/Projects', 'Priority'),
            'type' => \Yii::t('vendor/dinhtrung/project/Projects', 'Type'),
        ];
    }
}
