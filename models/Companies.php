<?php

namespace dinhtrung\project\models;

/**
 * This is the model class for table "companies".
 *
 * @property integer $id
 * @property integer $module
 * @property string $name
 * @property string $phone1
 * @property string $phone2
 * @property string $fax
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $primary_url
 * @property integer $owner
 * @property string $description
 * @property integer $type
 * @property string $email
 * @property string $custom
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['module', 'owner', 'type'], 'integer'],
            [['description', 'custom'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['phone1', 'phone2', 'fax', 'city', 'state'], 'string', 'max' => 30],
            [['address1', 'address2'], 'string', 'max' => 50],
            [['zip'], 'string', 'max' => 11],
            [['primary_url', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => \Yii::t('vendor/dinhtrung/project/Companies', 'ID'),
            'module' => \Yii::t('vendor/dinhtrung/project/Companies', 'Module'),
            'name' => \Yii::t('vendor/dinhtrung/project/Companies', 'Name'),
            'phone1' => \Yii::t('vendor/dinhtrung/project/Companies', 'Phone1'),
            'phone2' => \Yii::t('vendor/dinhtrung/project/Companies', 'Phone2'),
            'fax' => \Yii::t('vendor/dinhtrung/project/Companies', 'Fax'),
            'address1' => \Yii::t('vendor/dinhtrung/project/Companies', 'Address1'),
            'address2' => \Yii::t('vendor/dinhtrung/project/Companies', 'Address2'),
            'city' => \Yii::t('vendor/dinhtrung/project/Companies', 'City'),
            'state' => \Yii::t('vendor/dinhtrung/project/Companies', 'State'),
            'zip' => \Yii::t('vendor/dinhtrung/project/Companies', 'Zip'),
            'primary_url' => \Yii::t('vendor/dinhtrung/project/Companies', 'Primary Url'),
            'owner' => \Yii::t('vendor/dinhtrung/project/Companies', 'Owner'),
            'description' => \Yii::t('vendor/dinhtrung/project/Companies', 'Description'),
            'type' => \Yii::t('vendor/dinhtrung/project/Companies', 'Type'),
            'email' => \Yii::t('vendor/dinhtrung/project/Companies', 'Email'),
            'custom' => \Yii::t('vendor/dinhtrung/project/Companies', 'Custom'),
        ];
    }
}
