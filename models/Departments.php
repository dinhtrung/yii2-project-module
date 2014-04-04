<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "departments".
 *
 * @property string $id
 * @property string $parent
 * @property string $company
 * @property string $name
 * @property string $phone
 * @property string $fax
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $url
 * @property string $desc
 * @property string $owner
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'company', 'owner'], 'integer'],
            [['name'], 'required'],
            [['name', 'desc'], 'string'],
            [['phone', 'fax', 'address1', 'address2', 'city', 'state'], 'string', 'max' => 30],
            [['zip'], 'string', 'max' => 11],
            [['url'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Departments', 'ID'),
            'parent' => \Yii::t('vendor/dinhtrung/project/Departments', 'Parent'),
            'company' => \Yii::t('vendor/dinhtrung/project/Departments', 'Company'),
            'name' => \Yii::t('vendor/dinhtrung/project/Departments', 'Name'),
            'phone' => \Yii::t('vendor/dinhtrung/project/Departments', 'Phone'),
            'fax' => \Yii::t('vendor/dinhtrung/project/Departments', 'Fax'),
            'address1' => \Yii::t('vendor/dinhtrung/project/Departments', 'Address1'),
            'address2' => \Yii::t('vendor/dinhtrung/project/Departments', 'Address2'),
            'city' => \Yii::t('vendor/dinhtrung/project/Departments', 'City'),
            'state' => \Yii::t('vendor/dinhtrung/project/Departments', 'State'),
            'zip' => \Yii::t('vendor/dinhtrung/project/Departments', 'Zip'),
            'url' => \Yii::t('vendor/dinhtrung/project/Departments', 'Url'),
            'desc' => \Yii::t('vendor/dinhtrung/project/Departments', 'Desc'),
            'owner' => \Yii::t('vendor/dinhtrung/project/Departments', 'Owner'),
        ];
    }
}
